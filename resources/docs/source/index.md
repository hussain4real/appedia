---
title: API Reference

language_tabs:
    - bash
    - javascript

includes:

search: true

toc_footers:
    - <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---

<!-- START_INFO -->

# Info

Welcome to Housemall API reference.
[Get Postman Collection](http://localhost:8000/docs/collection.json)

<!-- END_INFO -->

#Product management

APIs for managing products

<!-- START_4157e0edf1bceccf85f04a2d1851670c -->

## Display a listing of products.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/products" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/products");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "products": {
        "current_page": 1,
        "data": [
            {
                "id": 51,
                "name": "Headphone",
                "slug": "headphone",
                "detail": "9mm headphone, portable, slicky",
                "description": "<p>every product has a taste and aura around it especially cool ones</p>",
                "price": 200,
                "cover_img": "products\\April2020\\N3pg6fwmLBN4E8IzemSW.jpg",
                "images": "[\"products\\\\April2020\\\\4xX7Iz8ltPJdrMZbSBOF.jpg\",\"products\\\\April2020\\\\9ggxCXC7mbHV4xHeCmE3.jpg\",\"products\\\\April2020\\\\CvdEFgFgflepZHIL9nPl.jpg\"]",
                "shop_id": 1,
                "created_at": "2020-04-03T14:28:00.000000Z",
                "updated_at": "2020-04-08T17:11:05.000000Z",
                "featured": 1,
                "quantity": 6,
                "product_categories_id": 1,
                "status": "new"
            },
            {
                "id": 42,
                "name": "Sapiente sed est.",
                "slug": null,
                "detail": null,
                "description": "<p>Quis aperiam esse tempora accusantium optio quaerat dolores asperiores possimus suscipit non at nesciunt voluptatem velit voluptates debitis deserunt.</p>",
                "price": 3324,
                "cover_img": null,
                "images": null,
                "shop_id": null,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-03T09:52:57.000000Z",
                "featured": 1,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 37,
                "name": "Saepe provident.",
                "slug": null,
                "detail": null,
                "description": "<p>Fugiat quibusdam optio harum deserunt doloremque totam quia repellendus soluta id sit eos quae iusto sed ea sapiente temporibus enim reiciendis facere rerum hic.</p>",
                "price": 3725,
                "cover_img": null,
                "images": null,
                "shop_id": null,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-03T09:52:07.000000Z",
                "featured": 1,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 33,
                "name": "Et dignissimos.",
                "slug": null,
                "detail": null,
                "description": "<p>Iusto tempore quod aut voluptatem eveniet dolore ea tempora dolor molestiae aut omnis saepe nostrum velit veniam dolores aspernatur accusantium cum.</p>",
                "price": 1008,
                "cover_img": null,
                "images": null,
                "shop_id": null,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-02T20:57:09.000000Z",
                "featured": 1,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 40,
                "name": "Temporibus qui.",
                "slug": null,
                "detail": null,
                "description": "<p>Ea nihil atque aliquam id ipsum consequatur assumenda recusandae quae quis quia aut fugit asperiores sequi nulla qui occaecati.</p>",
                "price": 1381,
                "cover_img": null,
                "images": null,
                "shop_id": null,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-03T09:52:37.000000Z",
                "featured": 1,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 39,
                "name": "Non omnis reprehenderit.",
                "slug": null,
                "detail": null,
                "description": "<p>Ad eius omnis voluptas officia nam impedit ipsam sed voluptas voluptas rem asperiores iure quia et ea voluptate qui corrupti nesciunt eius quo iusto aut.</p>",
                "price": 421,
                "cover_img": null,
                "images": null,
                "shop_id": null,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-03T09:52:26.000000Z",
                "featured": 1,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 36,
                "name": "Numquam suscipit mollitia.",
                "slug": null,
                "detail": null,
                "description": "<p>Ipsa nesciunt ut voluptatem dolor animi et sit quas placeat assumenda delectus quia dolor porro dolor voluptate dolores sunt dolorum vero.</p>",
                "price": 4827,
                "cover_img": null,
                "images": null,
                "shop_id": null,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-03T09:51:58.000000Z",
                "featured": 1,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 41,
                "name": "Facilis soluta voluptatem.",
                "slug": null,
                "detail": null,
                "description": "<p>Et voluptate et nesciunt eveniet ipsa commodi in quo autem velit molestiae quo rem perspiciatis rem et in similique ut numquam quo autem ea ea voluptatem.</p>",
                "price": 874,
                "cover_img": null,
                "images": null,
                "shop_id": null,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-03T09:52:47.000000Z",
                "featured": 1,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            }
        ],
        "first_page_url": "http://localhost/api/v1/products?page=1",
        "from": 1,
        "last_page": 2,
        "last_page_url": "http://localhost/api/v1/products?page=2",
        "next_page_url": "http://localhost/api/v1/products?page=2",
        "path": "http://localhost/api/v1/products",
        "per_page": 8,
        "prev_page_url": null,
        "to": 8,
        "total": 14
    },
    "categories": [
        {
            "id": 1,
            "parent_id": null,
            "order": 1,
            "name": "Men",
            "slug": "men",
            "created_at": "2020-03-23T17:54:27.000000Z",
            "updated_at": "2020-04-02T20:56:02.000000Z"
        },
        {
            "id": 2,
            "parent_id": null,
            "order": 1,
            "name": "Women",
            "slug": "women",
            "created_at": "2020-03-23T17:54:27.000000Z",
            "updated_at": "2020-04-02T20:56:13.000000Z"
        },
        {
            "id": 3,
            "parent_id": null,
            "order": 1,
            "name": "Accessories",
            "slug": "accessories",
            "created_at": "2020-04-02T20:55:53.000000Z",
            "updated_at": "2020-04-03T11:27:22.000000Z"
        },
        {
            "id": 4,
            "parent_id": null,
            "order": 1,
            "name": "Kids",
            "slug": "kids",
            "created_at": "2020-04-02T22:07:34.000000Z",
            "updated_at": "2020-04-02T22:07:34.000000Z"
        },
        {
            "id": 5,
            "parent_id": null,
            "order": 1,
            "name": "Clothing",
            "slug": "clothing",
            "created_at": "2020-04-03T11:25:29.000000Z",
            "updated_at": "2020-04-03T11:27:00.000000Z"
        },
        {
            "id": 6,
            "parent_id": null,
            "order": 1,
            "name": "Shoes",
            "slug": "shoes",
            "created_at": "2020-04-03T11:26:18.000000Z",
            "updated_at": "2020-04-03T11:26:18.000000Z"
        },
        {
            "id": 7,
            "parent_id": null,
            "order": 1,
            "name": "Bags",
            "slug": "bags",
            "created_at": "2020-04-03T11:26:46.000000Z",
            "updated_at": "2020-04-03T11:26:46.000000Z"
        }
    ],
    "categoryName": "Featured"
}
```

### HTTP Request

`GET api/v1/products`

<!-- END_4157e0edf1bceccf85f04a2d1851670c -->

<!-- START_65e137d14741894b7db93dbf8a2849bf -->

## Display the specified product.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/products/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/products/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (201):

```json
{
    "product": {
        "id": 1,
        "name": "Eum et.",
        "slug": null,
        "detail": null,
        "description": "Maxime eius et laboriosam at et omnis quaerat ea et nobis et corrupti qui aut inventore voluptas laboriosam sit temporibus esse aut quos expedita et repudiandae et iste.",
        "price": 4562,
        "cover_img": null,
        "images": null,
        "shop_id": 1,
        "created_at": "2020-03-31T21:56:38.000000Z",
        "updated_at": "2020-03-31T21:56:38.000000Z",
        "featured": 0,
        "quantity": 1,
        "product_categories_id": null,
        "status": "new"
    },
    "stockLevel": "<div class=\"badge badge-warning\"> Low Stock </div>",
    "mightAlsoLike": [
        {
            "id": 9,
            "name": "Modi facere.",
            "slug": null,
            "detail": null,
            "description": "Atque doloremque sequi repellat mollitia ea voluptas et amet eligendi reprehenderit facere exercitationem repudiandae nisi occaecati optio nemo.",
            "price": 3752,
            "cover_img": null,
            "images": null,
            "shop_id": null,
            "created_at": "2020-03-31T21:56:39.000000Z",
            "updated_at": "2020-03-31T21:56:39.000000Z",
            "featured": 0,
            "quantity": 1,
            "product_categories_id": null,
            "status": "new"
        },
        {
            "id": 33,
            "name": "Et dignissimos.",
            "slug": null,
            "detail": null,
            "description": "<p>Iusto tempore quod aut voluptatem eveniet dolore ea tempora dolor molestiae aut omnis saepe nostrum velit veniam dolores aspernatur accusantium cum.</p>",
            "price": 1008,
            "cover_img": null,
            "images": null,
            "shop_id": null,
            "created_at": "2020-03-31T21:56:00.000000Z",
            "updated_at": "2020-04-02T20:57:09.000000Z",
            "featured": 1,
            "quantity": 1,
            "product_categories_id": null,
            "status": "new"
        },
        {
            "id": 5,
            "name": "Odit sed.",
            "slug": null,
            "detail": null,
            "description": "Natus deserunt ducimus accusantium eaque voluptates commodi omnis dolores ducimus voluptatem aut facilis asperiores vero.",
            "price": 2119,
            "cover_img": null,
            "images": null,
            "shop_id": null,
            "created_at": "2020-03-31T21:56:39.000000Z",
            "updated_at": "2020-03-31T21:56:39.000000Z",
            "featured": 0,
            "quantity": 1,
            "product_categories_id": null,
            "status": "new"
        },
        {
            "id": 49,
            "name": "Nemo accusantium.",
            "slug": null,
            "detail": null,
            "description": "<p>Est quia non consequuntur expedita laboriosam odio enim quia asperiores rerum ab rem cum quia nihil deleniti.</p>",
            "price": 2387,
            "cover_img": null,
            "images": null,
            "shop_id": null,
            "created_at": "2020-03-31T21:56:00.000000Z",
            "updated_at": "2020-04-03T09:53:47.000000Z",
            "featured": 1,
            "quantity": 1,
            "product_categories_id": null,
            "status": "new"
        }
    ]
}
```

### HTTP Request

`GET api/v1/products/{product}`

<!-- END_65e137d14741894b7db93dbf8a2849bf -->

#User management

APIs for managing users

<!-- START_8ae5d428da27b2b014dc767c2f19a813 -->

## Create a user

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/register" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"Hussain Aminu","email":"aminu1@gmail.com","password":"1234aminu","password_confirmation":"1234aminu"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/register");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

let body = {
    name: "Hussain Aminu",
    email: "aminu1@gmail.com",
    password: "1234aminu",
    password_confirmation: "1234aminu"
};

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiNDhjZDE3NDRkOTc1ZDM0MjM1ODY3ZTY4NDllZTk0ZjBmYjIxNTFjZmQ0NGMxNmY3ZWJmNzI1OTZjYzA4OTViMWMxZWU0ZTBmNzY0YmQxZTUiLCJpYXQiOjE1ODc2MzIxMDYsIm5iZiI6MTU4NzYzMjEwNiwiZXhwIjoxNjE5MTY4MTA2LCJzdWIiOiI3Iiwic2NvcGVzIjpbXX0.W9azpd5PVj987CT5JYAl42KhuWVUD5r77Nv0e2SczwOmHdSdWZ43diEt2R_ZUkJwoe8Rc6KQCscjOc_BIPhgrsXuzW-WXGZJ0n7Fcs1BoovIrIZNVdzcTvWsWbg5ZknrLsZqJeINMJ-Lxh6wk_PrSoaHQz1d6qnTihfRZDalKQxWU_Nst2ZGZROvWTve8EFxgGA2ryaaG8tQaAuX7V6a5NMwd4Ew7vklc25OYt_IgU8A0xG6Tb90UcYr-Z3fAFnk6SYRrNB7bcBASvV9zXOVYYTejy3jab3ONxfPHDcfG7SXAWZ80Mv-uqIvJ7vKbXLywq_fWSVzxegz7RNZUZ5ZnOqraMLA83h1rRvPXZfmAlRcMR22hTcPeBVlOuMQXTuhzeQc9xO0T5QvMUi_BTE_XF9Wj-p56Hb44LbX6_qdgkTf49K_iElCp0-aAlJy01_3EizCJxzikxu4VLhJpVgapvyQIqTZKix9Wxcnqf5ALs62gEYth3YF72Thftg75_lq3_GpO-Rx4AG23vA6RFDbS3rGA439OZcl7GQGC2cWqkaH_f-pEdh7qTUdqi4xkkvaEGl5jxNN42PIGgvZYzNhQYgeXfg76CsUnYMNuI8ygpNJRvQtRAr9ZJ-6clMDnN5pz55Yj_gxD6Rulg80_41FHD7GXugxyA9acJXQb5EKL5s"
    }
}
```

> Example response (401):

```json
{
    "error": {
        "email": ["The email has already been taken."]
    }
}
```

### HTTP Request

`POST api/v1/register`

#### Body Parameters

| Parameter               | Type   | Status   | Description                           |
| ----------------------- | ------ | -------- | ------------------------------------- |
| `name`                  | string | required | fullname of the registrant.           |
| `email`                 | string | required | email of the registrant.              |
| `password`              | string | required | password of the registrant.           |
| `password_confirmation` | string | required | confirmed password of the registrant. |

<!-- END_8ae5d428da27b2b014dc767c2f19a813 -->

<!-- START_8c0e48cd8efa861b308fc45872ff0837 -->

## Give a registered user access.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"aminu@gmail.com","password":"234aminu"}'

```

```javascript
const url = new URL("http://localhost:8000/api/v1/login");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

let body = {
    email: "aminu@gmail.com",
    password: "234aminu"
};

fetch(url, {
    method: "POST",
    headers: headers,
    body: body
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "success": {
        "token": "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiYTA5NTc4ZWFhYjMyMjIyOWNlYWYxOGFkOWYyN2RhNTNiNDBkNzI3YjYwMjM3NDk1ODU4N2MzN2ZlOTMzMGZiMTcwMzRjOTY1YWM1YThkNTUiLCJpYXQiOjE1ODc2Mjk2NTYsIm5iZiI6MTU4NzYyOTY1NiwiZXhwIjoxNjE5MTY1NjU2LCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.u5vtWJI61cdfObDyjYdcIvXDXVjO6och3WDlbVQ_qMvFbQN0SVwTqq1MGAGnUfosmVlNcTE1okj33VzINuDEI_-zpGQVhEaYpVA48k4fM8ZBTwRnOotHYl6RpPfPVBpr7jv8qtu3XCqUZ0pF9rTTxp2VGtpDGhc9hk9pQDiakK410xdjqFlcmf2KgDnQp0stVZKAy8jA5fgzs7xmS3UmqLIm5GPRfRDCEusK2GL3DyY0N7juCVKW6ACnbpUgGEgbQJ5PnK4nJnnhYaVEFC3Yp1rmIvfAPXTS_20sPCktR6dt_nKz0VVIYiLgWpVnfvxFH3yhtpKaybTZk32TrKtqTKTh4fEjtN4ebsA_OqXqKGZOXdFj4wO3pHkCVhoXl7vFzE4wnDe637ptmsbQY-i2Hjnk3D4F1TyDMieAX4L0HQS3fBAp7EYXVRbR_ly2On9FfqNrWNE1CHCNAhJNDuP4OKr9jHd0ByLb0FJfBAdXPwYQFeHFaD0FbBwWhUNuSIk8XbDd7olCkTU-d2wOABU1PVSMhLjWYJb3twp8vm5G11q9UTh8ZeLmtTfCKbCwvV6zTJgS1lzhCR0FCynY14DDKO7qu_RLlrJd3mvVJgKFdPNMXCUUKWXjxWYlqK6Jgvm1zX56BeSOkvIeBmVX3bJGAGxTJ4iZfMi55zeRHUc1uRU"
    },
    "user": {
        "id": 6,
        "role_id": 2,
        "name": "Aminu Hussain",
        "email": "aminu@gmail.com",
        "avatar": "users/default.png",
        "email_verified_at": "2020-04-22T06:29:20.000000Z",
        "settings": [],
        "created_at": "2020-04-22T05:57:07.000000Z",
        "updated_at": "2020-04-22T06:29:20.000000Z"
    }
}
```

> Example response (401):

```json
{
    "message": "Invalid email or password."
}
```

### HTTP Request

`POST api/v1/login`

#### Body Parameters

| Parameter  | Type   | Status   | Description                 |
| ---------- | ------ | -------- | --------------------------- |
| `email`    | string | required | email of the registrant.    |
| `password` | string | required | password of the registrant. |

<!-- END_8c0e48cd8efa861b308fc45872ff0837 -->

<!-- START_2600d25ec5170396de8554c9c775f6ed -->

## Get a logged in user details.

<br><small style="padding: 1px 9px 2px;font-weight: bold;white-space: nowrap;color: #ffffff;-webkit-border-radius: 9px;-moz-border-radius: 9px;border-radius: 9px;background-color: #3a87ad;">Requires authentication</small>

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/getUser" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/getUser");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "message": "You are verified",
    "success": {
        "id": 6,
        "role_id": 2,
        "name": "Aminu Hussain",
        "email": "aminu@gmail.com",
        "avatar": "users/default.png",
        "email_verified_at": "2020-04-22T06:29:20.000000Z",
        "settings": [],
        "created_at": "2020-04-22T05:57:07.000000Z",
        "updated_at": "2020-04-22T06:29:20.000000Z"
    }
}
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request

`GET api/v1/getUser`

<!-- END_2600d25ec5170396de8554c9c775f6ed -->

#general

<!-- START_41c40ad08033960fe2cc3dcaf77839de -->

## Send a reset link to the given user.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/password/email" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/password/email");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "POST",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "email": ["The email field is required."]
    }
}
```

### HTTP Request

`POST api/v1/password/email`

<!-- END_41c40ad08033960fe2cc3dcaf77839de -->

<!-- START_a62f1703e9fba891a3e20ff27854aac0 -->

## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/password/reset" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/password/reset");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "POST",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "token": ["The token field is required."],
        "email": ["The email field is required."],
        "password": ["The password field is required."]
    }
}
```

### HTTP Request

`POST api/v1/password/reset`

<!-- END_a62f1703e9fba891a3e20ff27854aac0 -->

<!-- START_8df4afd503381b8d32e15ea748ca050d -->

## Resend the email verification notification.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/email/reseend" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/email/reseend");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request

`GET api/v1/email/reseend`

<!-- END_8df4afd503381b8d32e15ea748ca050d -->

<!-- START_fddf6e7d0c71c0b6bfea131b7461883d -->

## Mark the authenticated user&#039;s email address as verified.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/email/verify/1/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/email/verify/1/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (403):

```json
{
    "message": "Invalid signature."
}
```

### HTTP Request

`GET api/v1/email/verify/{id}/{hash}`

<!-- END_fddf6e7d0c71c0b6bfea131b7461883d -->

<!-- START_0b53c42f007c5a3ca1fb91b518ef98c3 -->

## api/v1/search

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/search" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/search");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "query": ["The query field is required."]
    }
}
```

### HTTP Request

`GET api/v1/search`

<!-- END_0b53c42f007c5a3ca1fb91b518ef98c3 -->

<!-- START_4f4e405a5e322af37d709e084b12cfcb -->

## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/shops" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/shops");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "heleys saloon",
            "user_id": 1,
            "is_active": 1,
            "description": "A odit cumque provident possimus rem quibusdam dolor doloribus earum sequi non voluptas veritatis.",
            "rating": null,
            "created_at": "2020-03-31T21:56:38.000000Z",
            "updated_at": "2020-03-31T21:56:38.000000Z",
            "mall_id": 2
        },
        {
            "id": 2,
            "name": "Omnis qui quas.",
            "user_id": 3,
            "is_active": 1,
            "description": "Incidunt debitis voluptatem itaque optio hic et molestiae veritatis aut laudantium ab voluptatem sunt nemo quidem occaecati nisi.",
            "rating": null,
            "created_at": "2020-03-31T21:56:38.000000Z",
            "updated_at": "2020-03-31T21:56:38.000000Z",
            "mall_id": 2
        }
    ],
    "links": {
        "first": "http://localhost/api/v1/shops?page=1",
        "last": "http://localhost/api/v1/shops?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http://localhost/api/v1/shops",
        "per_page": 4,
        "to": 2,
        "total": 2
    }
}
```

### HTTP Request

`GET api/v1/shops`

<!-- END_4f4e405a5e322af37d709e084b12cfcb -->

<!-- START_f54c3d161a22459b4037d71561538566 -->

## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/shops" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/shops");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "POST",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (422):

```json
{
    "message": "The given data was invalid.",
    "errors": {
        "name": ["The name field is required."]
    }
}
```

### HTTP Request

`POST api/v1/shops`

<!-- END_f54c3d161a22459b4037d71561538566 -->

<!-- START_57b8eda0cf7612d79795ac7ce2aec555 -->

## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/shops/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/shops/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "heleys saloon",
        "user_id": 1,
        "is_active": 1,
        "description": "A odit cumque provident possimus rem quibusdam dolor doloribus earum sequi non voluptas veritatis.",
        "rating": null,
        "created_at": "2020-03-31T21:56:38.000000Z",
        "updated_at": "2020-03-31T21:56:38.000000Z",
        "mall_id": 2,
        "products": [
            {
                "id": 1,
                "name": "Eum et.",
                "slug": null,
                "detail": null,
                "description": "Maxime eius et laboriosam at et omnis quaerat ea et nobis et corrupti qui aut inventore voluptas laboriosam sit temporibus esse aut quos expedita et repudiandae et iste.",
                "price": 4562,
                "cover_img": null,
                "images": null,
                "shop_id": 1,
                "created_at": "2020-03-31T21:56:38.000000Z",
                "updated_at": "2020-03-31T21:56:38.000000Z",
                "featured": 0,
                "quantity": 1,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 45,
                "name": "Totam fuga animi.",
                "slug": null,
                "detail": null,
                "description": "<p>Architecto ut consectetur reiciendis ipsa sed quis perferendis enim omnis provident repellat aut qui illo sed accusamus non qui.</p>",
                "price": 1043,
                "cover_img": null,
                "images": null,
                "shop_id": 1,
                "created_at": "2020-03-31T21:56:00.000000Z",
                "updated_at": "2020-04-12T21:49:39.000000Z",
                "featured": 1,
                "quantity": 9,
                "product_categories_id": null,
                "status": "new"
            },
            {
                "id": 51,
                "name": "Headphone",
                "slug": "headphone",
                "detail": "9mm headphone, portable, slicky",
                "description": "<p>every product has a taste and aura around it especially cool ones</p>",
                "price": 200,
                "cover_img": "products\\April2020\\N3pg6fwmLBN4E8IzemSW.jpg",
                "images": "[\"products\\\\April2020\\\\4xX7Iz8ltPJdrMZbSBOF.jpg\",\"products\\\\April2020\\\\9ggxCXC7mbHV4xHeCmE3.jpg\",\"products\\\\April2020\\\\CvdEFgFgflepZHIL9nPl.jpg\"]",
                "shop_id": 1,
                "created_at": "2020-04-03T14:28:00.000000Z",
                "updated_at": "2020-04-08T17:11:05.000000Z",
                "featured": 1,
                "quantity": 6,
                "product_categories_id": 1,
                "status": "new"
            },
            {
                "id": 55,
                "name": "Handbag",
                "slug": "handbag",
                "detail": "nothing",
                "description": "<p>same as above</p>",
                "price": 600,
                "cover_img": null,
                "images": null,
                "shop_id": 1,
                "created_at": "2020-04-07T09:59:00.000000Z",
                "updated_at": "2020-04-08T13:34:08.000000Z",
                "featured": 1,
                "quantity": 8,
                "product_categories_id": null,
                "status": "new"
            }
        ]
    }
}
```

### HTTP Request

`GET api/v1/shops/{shop}`

<!-- END_57b8eda0cf7612d79795ac7ce2aec555 -->

<!-- START_06b2b0d7dfd445c0bc7fdaa7ff3e5854 -->

## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/v1/shops/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/shops/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "PUT",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

### HTTP Request

`PUT api/v1/shops/{shop}`

`PATCH api/v1/shops/{shop}`

<!-- END_06b2b0d7dfd445c0bc7fdaa7ff3e5854 -->

<!-- START_5ac1071329dd13b65e4ac2cc1c371842 -->

## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/v1/shops/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/shops/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "DELETE",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

### HTTP Request

`DELETE api/v1/shops/{shop}`

<!-- END_5ac1071329dd13b65e4ac2cc1c371842 -->

<!-- START_3e535b2bcd0af311f08a0402c6196800 -->

## Display a listing of the resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/malls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/malls");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "name": "Nisi iure et.",
            "user_id": 6,
            "is_active": 1,
            "description": "Nemo hic molestias molestiae voluptas aliquid ut hic deserunt deleniti dolor ratione qui maiores omnis.",
            "rating": null,
            "created_at": "2020-04-20T16:29:16.000000Z",
            "updated_at": "2020-04-20T16:29:16.000000Z"
        },
        {
            "id": 2,
            "name": "Voluptatem id.",
            "user_id": 2,
            "is_active": 1,
            "description": "Soluta dolores ut maiores amet qui odio ut quaerat totam earum eos nam fugiat est quia ut esse omnis.",
            "rating": null,
            "created_at": "2020-04-20T16:29:16.000000Z",
            "updated_at": "2020-04-20T16:29:16.000000Z"
        },
        {
            "id": 3,
            "name": "Aperiam est.",
            "user_id": 2,
            "is_active": 1,
            "description": "Sint dolores rerum provident libero explicabo omnis aut id dicta et praesentium officiis id ipsam quaerat sed consectetur soluta tempore magnam.",
            "rating": null,
            "created_at": "2020-04-20T16:29:16.000000Z",
            "updated_at": "2020-04-20T16:29:16.000000Z"
        },
        {
            "id": 4,
            "name": "Architecto odit magni.",
            "user_id": 2,
            "is_active": 1,
            "description": "Consequatur sequi veritatis fugiat maxime est nam velit provident itaque occaecati praesentium provident dignissimos ea.",
            "rating": null,
            "created_at": "2020-04-20T16:29:16.000000Z",
            "updated_at": "2020-04-20T16:29:16.000000Z"
        }
    ],
    "links": {
        "first": "http://localhost/api/v1/malls?page=1",
        "last": "http://localhost/api/v1/malls?page=1",
        "prev": null,
        "next": null
    },
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 1,
        "path": "http://localhost/api/v1/malls",
        "per_page": 4,
        "to": 4,
        "total": 4
    }
}
```

### HTTP Request

`GET api/v1/malls`

<!-- END_3e535b2bcd0af311f08a0402c6196800 -->

<!-- START_e4c911a186e6317221f8590d516f0265 -->

## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST \
    "http://localhost:8000/api/v1/malls" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/malls");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "POST",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

### HTTP Request

`POST api/v1/malls`

<!-- END_e4c911a186e6317221f8590d516f0265 -->

<!-- START_19a0e05efe7a4cb04d2db0839e9b8bc9 -->

## Display the specified resource.

> Example request:

```bash
curl -X GET \
    -G "http://localhost:8000/api/v1/malls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/malls/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "GET",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "data": {
        "id": 1,
        "name": "Nisi iure et.",
        "user_id": 6,
        "is_active": 1,
        "description": "Nemo hic molestias molestiae voluptas aliquid ut hic deserunt deleniti dolor ratione qui maiores omnis.",
        "rating": null,
        "created_at": "2020-04-20T16:29:16.000000Z",
        "updated_at": "2020-04-20T16:29:16.000000Z",
        "shops": []
    }
}
```

### HTTP Request

`GET api/v1/malls/{mall}`

<!-- END_19a0e05efe7a4cb04d2db0839e9b8bc9 -->

<!-- START_966ff817e97a1660cf2d5549fe61e536 -->

## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT \
    "http://localhost:8000/api/v1/malls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/malls/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "PUT",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

### HTTP Request

`PUT api/v1/malls/{mall}`

`PATCH api/v1/malls/{mall}`

<!-- END_966ff817e97a1660cf2d5549fe61e536 -->

<!-- START_865d885e02d42164cf6c53bbc2e5ec18 -->

## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE \
    "http://localhost:8000/api/v1/malls/1" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL("http://localhost:8000/api/v1/malls/1");

let headers = {
    "Content-Type": "application/json",
    Accept: "application/json"
};

fetch(url, {
    method: "DELETE",
    headers: headers
})
    .then(response => response.json())
    .then(json => console.log(json));
```

### HTTP Request

`DELETE api/v1/malls/{mall}`

<!-- END_865d885e02d42164cf6c53bbc2e5ec18 -->
