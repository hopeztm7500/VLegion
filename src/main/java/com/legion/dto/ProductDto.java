package com.legion.dto;

public class ProductDto {

	private int id;
	private String productName;
	private String productDes;
	private double normalPrice;
	private double realPrice;
	private int productType;
	
	public ProductDto(int id, String productName, String productDes, double normalPrice, double realPrice, int productType){
		this.id = id;
		this.productName = productName;
		this.productDes = productDes;
		this.normalPrice = normalPrice;
		this.realPrice = realPrice;
		this.productType = productType;
	}
	public int getId() {
		return id;
	}
	public void setId(int id) {
		this.id = id;
	}
	public String getProductName() {
		return productName;
	}
	public void setProductName(String productName) {
		this.productName = productName;
	}
	public String getProductDes() {
		return productDes;
	}
	public void setProductDes(String productDes) {
		this.productDes = productDes;
	}
	public double getNormalPrice() {
		return normalPrice;
	}
	public void setNormalPrice(double normalPrice) {
		this.normalPrice = normalPrice;
	}
	public double getRealPrice() {
		return realPrice;
	}
	public void setRealPrice(double realPrice) {
		this.realPrice = realPrice;
	}
	public int getProductType() {
		return productType;
	}
	public void setProductType(int productType) {
		this.productType = productType;
	}
	
	
}
