SELECT 
    *
FROM
    employees
WHERE
    gender = 'F'
        AND birth_date >= '1963-01-01'
		AND birth_date < '1964-01-01';