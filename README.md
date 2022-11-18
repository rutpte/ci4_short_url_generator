# Short url

## What is Short url?

Short URL is a url shortener to reduce a long link. Use our tool to shorten links and then share them.

This repository holds the distributable version of the framework. It has been built from the
[development repository](https://github.com/rutpte/ci4_short_url_generator.git).


## Important Change config


**Please** read the user guide for a better explanation of how CI4 works!



## Server Requirements

PHP version 7.4 or higher is required

## database

***mysql***

**sql for create data base**

*CREATE TABLE `url` (
  `id` int(10) NOT NULL,
  `ori_url` varchar(128) NOT NULL,
  `short_url` varchar(255) NOT NULL,
  `qrc_path` varchar(255) DEFAULT NULL,
  `num_click` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
ALTER TABLE `url`
ADD PRIMARY KEY (`id`);
ALTER TABLE `url`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;*


## DFD 0.
![image](https://user-images.githubusercontent.com/3283729/202655679-ac9bf7cf-e83b-472a-956f-be01765dc0f3.png)

## flow chat.
![image](https://user-images.githubusercontent.com/3283729/202655837-9375b2e7-08fa-4bd5-a784-bcf115829464.png)


