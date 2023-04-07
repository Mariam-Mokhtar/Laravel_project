# Pharmacy Managment System
<p align="center" >
  <img style = "width:150px; height:110px;border-radius:50%;" src="https://user-images.githubusercontent.com/81237428/230607665-ef41d0f9-52e6-4e21-b87d-6322b338e57c.gif" />
</p>

## INTRODUCTION
## PACKAGES
<pre>
- laravel/sanctum                         v3.2.1                Laravel Sanctum provides a featherweight authentication
- laravel/ui                              v4.2.1                Laravel UI utilities and presets
- yajra/laravel-datatables                v9.0.0                Laravel DataTables Complete Package
- spatie/laravel-permission               5.10.0                Permission handling for Laravel 6.0 and up
- webpatser/laravel-countries             dev-master 9d0cd97    Laravel Countries is a bundle for Laravel, providing Al   
- egulias/email-validator                 4.0.1                 A library for validating emails against several RFCs
- cybercog/laravel-ban                    4.8.0                 Laravel Ban simplify blocking and banning Eloquent models  
- stripe/stripe-php                       v10.12.1              Stripe PHP Library
</pre>

## CLIENT APIs:
|  Method  |      Endpoint         | Description | 
| :---:    |         :---:         | :---: |   
| POST     | `/api/register`       | `Register` |
| POST     | `/api/login`          | `Login`  | 
| GET      | `/api/client/{id}`    | `Get Client By ID` | 
| PUT      | `/api/client/{id}`    | `Update Client` | 
| POST     | `/api/address`        | `Add New Address` | 
| GET      | `/api/address`        | `Get All Addresses` | 
| GET      | `/api/address/{id}`   | `Get Address By ID` | 
| PUT      | `/api/address/{id}`   | `Update Address` | 
| DELETE   | `/api/address/{id}`   | `Delete Address` | 
| POST     | `/api/orders`         | `Create New Order` | 
| GET      | `/api/orders/{id}`    | `Get Order By ID` | 
| PUT      | `/api/orders/{id}`    | `Update Order` | 
| GET      | `/api/email/resend/{id}` | `Resend Email Verification` | 


## ERD
![pharmacyERD](https://user-images.githubusercontent.com/63107268/230602218-ddbb990e-1048-45cc-970f-bb6b5567c610.png)

