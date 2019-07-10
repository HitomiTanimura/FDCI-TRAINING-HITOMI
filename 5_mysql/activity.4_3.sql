SELECT 
	city, address 
FROM 
 	address
INNER JOIN
 	city
ON 
	city.city_id = address.address_id;