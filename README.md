# Short url

## What is Short url?

Short URL is a url shortener to reduce a long link. Use our tool to shorten links and then share them.

This repository holds the distributable version of the framework. It has been built from the
[development repository](https://github.com/rutpte/ci4_short_url_generator.git).


## DFD 0.
![image](https://user-images.githubusercontent.com/3283729/202655679-ac9bf7cf-e83b-472a-956f-be01765dc0f3.png)

## flow chat.
![image](https://user-images.githubusercontent.com/3283729/202655837-9375b2e7-08fa-4bd5-a784-bcf115829464.png)

## How to install.
***Requirements***

* PHP version 7.4 or higher is required


#  install server.
*this giude use Xampp*

* install Xampp.[download here](https://www.apachefriends.org/download.html)
* go to ```xampp\htdocs```folder.
* and pull git file.


# create database.


**database name is**

```ci4```

*crate table url*
***run this sql to create table url.***
***1.***
```
CREATE TABLE `url` (
  `id` int(10) NOT NULL,
  `ori_url` varchar(128) NOT NULL,
  `short_url` varchar(255) NOT NULL,
  `qrc_path` varchar(255) DEFAULT NULL,
  `num_click` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```
***2.***
```
ALTER TABLE `url`
ADD PRIMARY KEY (`id`);
```
***3.***
```
ALTER TABLE `url`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;
```

# run server.
**click start**

![image](https://user-images.githubusercontent.com/3283729/202666553-e997adfa-c76b-4ae7-ac4a-66716dccf440.png)

# test to use app.
**go to browser**
```
http://localhost/ci4_short_url_generator/public/add_url
```





