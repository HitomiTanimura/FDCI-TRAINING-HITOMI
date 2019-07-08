SELECT 
    *
FROM
    employees
WHERE
    first_name
LIKE
    '%sam%'
AND
 	birth_date >= '1960-01-01';