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
# Requirements

* PHP version 7.4 or higher is required


# 1 install server.
*this giude use Xampp*

* install Xampp.
* go to ```xampp\htdocs```folder.
* and pull git file.


# create database.
*run this sql code*
```
CREATE TABLE `url` (
  `id` int(10) NOT NULL,
  `ori_url` varchar(128) NOT NULL,
  `short_url` varchar(255) NOT NULL,
  `qrc_path` varchar(255) DEFAULT NULL,
  `num_click` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
-------------------------------------
ALTER TABLE `url`
ADD PRIMARY KEY (`id`);
------------------------------------- 
ALTER TABLE `url`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

```


# Compilation

The code can be compiled with the provided makefile using the standard `make`
command.

If compiling the code manually, or integrating into a larger program, include
the following flags:

```
FLAGS=-std=c++17 -fsanitize=address -fuse-ld=gold -Wall -MMD \
      -fext-numeric-literals -lquadmath #-O3
```

Note that flag `-fuse-ld=gold` is only required on certain Ubuntu systems due
to a know bug with g++ 5.x.


# Sample Execution & Output

If run without command line arguments, using

```
./precisionEstimate
```

the following usage message will be displayed.

```
Usage: ./precisionEstimate numExecs
```

If run using 

```
./precisionEstimate 100000000
```

output *simliar* to

```
   0 secs | 1.19209e-07
   1 secs | 2.22045e-16
  17 secs | 1.92593e-34
```

will  be displayed. Note that the precision estimates will vary by
architecture/system.



