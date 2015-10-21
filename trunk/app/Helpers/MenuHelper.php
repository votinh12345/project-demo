<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class MenuHelper {

    public static function getMenu() {
        $category = new \App\Models\Category();
        $product = new \App\Models\Product();
        $categories = $category->getCategories(0);
        $data['categories'] = array();
        foreach ($categories as $category) {
            $children_data = array();

            if ($category['category_id'] == $data['category_id']) {
                $children = $category->getCategories($category['category_id']);

                foreach ($children as $child) {
                    $filter_data = array('filter_category_id' => $child['category_id'], 'filter_sub_category' => true);

                    $children_data[] = array(
                        'category_id' => $child['category_id'],
                        'name' => $child['name'] . (0 ? ' (' . $product->getTotalProducts($filter_data) . ')' : ''),
                        'href' => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
                    );
                }
            }

            $filter_data = array(
                'filter_category_id' => $category['category_id'],
                'filter_sub_category' => true
            );
            
            $data['categories'][] = array(
				'category_id' => $category['category_id'],
				'name'        => $category['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
				'children'    => $children_data,
				'href'        => $this->url->link('product/category', 'path=' . $category['category_id'])
			);
        }

        return $data;
    }

}
