-- (a) English language customers
SELECT * FROM `customer` where `language` = "EN";
-- (b) Updating language for a specific customer
UPDATE `customer` SET `language`='LT' WHERE `name` = 'Merril James';
-- (c) Counting custoemrs filtered by IP
SELECT COUNT(`id`) FROM `customer` WHERE `ip` = '73.72.1.32';
