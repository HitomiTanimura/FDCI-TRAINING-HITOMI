SELECT 
	address_id, address
FROM 
	address
LEFT JOIN 
	city
ON 
	address.address_id = city.city_id
WHERE 
	address.address_id = 5
OR  address.address_id = 10
OR  address.address_id = 15;