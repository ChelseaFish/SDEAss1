-- changed the name

ALTER TABLE Orders 
ADD amount NUMERIC NULL;


UPDATE Orders
SET Amount=noOftyres*110
WHERE Amount IS NULL;
