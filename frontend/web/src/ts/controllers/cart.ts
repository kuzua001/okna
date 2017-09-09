import * as ng from 'angular'


export interface IProduct {
	id: number;
	price: number;
	name : string;
	weight: number;
	img : string;
}

class ProductInCart {
	product: IProduct;
	quantity: number;

	constructor(product: IProduct)
	{
		this.product = product;
		this.quantity = 0;
	}
}

export interface ICart {
	total: number;
	quantity: number;
	products: ProductInCart[];
}

/**
 * Created by ivan on 6/20/17.
 */
export class CartController
{
	private cart: ICart;
	private products: IProduct[];
	private $rootScope;

	public getProducts() : any {
		return this.products;
	}

	public getQuantity() :number
	{
		return this.cart.quantity;
	}

	public getTotal() :number
	{
		return this.cart.total;
	}

	public getCount(product: IProduct) {
		return (product.id in this.cart.products) ? this.cart.products[product.id].quantity : 0;
	}

	public reduceProduct(product: IProduct)
	{
		this.setProduct(product, this.getCount(product) - 1);
	}

	public increaseProduct(product: IProduct)
	{
		this.setProduct(product, this.getCount(product) + 1);
	}

	public setProduct(product: IProduct, quantity)
	{

		if (quantity < 0)
			return;

		if (!(product.id in this.cart.products)) {
			this.cart.products[product.id] = new ProductInCart(product);
		}

		if (quantity !== 0) {
			this.cart.products[product.id].quantity = quantity;
		} else {
			delete this.cart.products[product.id];
		}

		this.cart.total    = 0;
		this.cart.quantity = 0;

		for (let i in this.cart.products) {
			this.cart.quantity +=  this.cart.products[i].quantity;
			this.cart.total    +=  this.cart.products[i].quantity * this.cart.products[i].product.price;
		}

		this.$rootScope.$broadcast('cartUpdate', this.cart);

		jQuery.post({
			url : 'ajax/update-cart',
			data : {
				cart: this.cart
			},
			success : (data) => {
				console.log(data);
			}
		});
	}

	constructor($rootScope)
	{
		this.$rootScope = $rootScope;

		let cart: ICart = {
			total : 0,
			quantity : 0,
			products : []
		};

		this.cart = cart;

		console.log(1);

		jQuery.ajax({
			url : 'ajax/get-products',
			type : 'get',
			dataType : 'json',
			success : (products) => {
				this.products = products
			},
			async : false
		});

	}

}