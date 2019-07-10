SELECT 
	address,city
FROM 
	address
RIGHT JOIN
	city
ON 
	address.address_id=city.city_id
WHERE 
	city.city_id = 299;