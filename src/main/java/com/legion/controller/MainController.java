package com.legion.controller;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.security.core.Authentication;
import org.springframework.security.core.context.SecurityContextHolder;
import org.springframework.stereotype.Controller;


import org.springframework.ui.ModelMap;
import org.springframework.web.bind.annotation.RequestMapping;




@Controller
@RequestMapping("/")
public class MainController {

	public boolean checkAndAddAuth(ModelMap model){
		Authentication auth = SecurityContextHolder.getContext()
				.getAuthentication();
		if (!auth.getPrincipal().equals("anonymousUser")) {
			model.addAttribute("authenticated", true);
			
			return true;
		}
		else{
			return false;
		}
	}
	
	@RequestMapping(value = { "/", "index" })
	public String index(ModelMap model) {
		checkAndAddAuth(model);
	
		return "index";
	}

	@RequestMapping(value = "product-details")
	public String aboutUs(ModelMap model) {
		checkAndAddAuth(model);
		return "product-details";
	}

	@RequestMapping(value = "contact-us")
	public String contactUs(ModelMap model) {
		checkAndAddAuth(model);
		return "contact-us";
	}

}