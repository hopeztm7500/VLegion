package com.legion.service.impl;

import java.util.List;

import com.legion.dto.ProductDto;
import com.legion.service.spec.ProductService;
import com.solon.dto.Product;

public class ProductServiceImpl implements ProductService {

	/*
	 *this.id = id;
		this.productName = productName;
		this.productDes = productDes;
		this.normalPrice = normalPrice;
		this.realPrice = realPrice;
		this.productType = productType;
	 *
	 */
	
	
	@Override
	public ProductDto getProductById(int id) {
		if(id == 1){
			return new ProductDto(1, "Bag", "This is a goog bag", 200, 180, 1);
		}
		if(id == 2){
			return new ProductDto(2, "Charger", "This is good Charger", 100, 80, 2);
		}
		if(id == 3){
			return new ProductDto(3, "Strap", "This is good Strap", 20, 10, 2);
		}
		if(id == 4){
			return new ProductDto(4, "Shoe", "This is good Shoe", 5, 4, 2);
		}
		return null;
	}

	@Override
	public List<ProductDto> getAllProduct() {
		// TODO Auto-generated method stub
		return null;
	}

}
