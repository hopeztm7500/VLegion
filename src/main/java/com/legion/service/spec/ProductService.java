package com.legion.service.spec;

import java.util.List;

import com.legion.dto.ProductDto;


public interface ProductService {

	public ProductDto getProductById(int id);
	public List<ProductDto> getAllProduct();
	
}
