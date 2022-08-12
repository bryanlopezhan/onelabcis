define({ "api": [{
    "type": "post",
    "url": "/blog/add",
    "title": "Add Blog.",
    "version": "0.1.0",
    "name": "Addblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blog unique access-key.</p>"
          }
          ,
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blog unique token.</p>"
          }
                  ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_blog_add"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
                    {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Slug",
            "description": "<p>Mandatory slug of Blogs Input Slug Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Content",
            "description": "<p>Mandatory content of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Title",
            "description": "<p>Mandatory title of Blogs Input Title Max Length : 255..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Image",
            "description": "<p>Mandatory image of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category",
            "description": "<p>Mandatory category of Blogs Input Category Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Tags",
            "description": "<p>Mandatory tags of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Status",
            "description": "<p>Mandatory status of Blogs Input Status Max Length : 10..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Author",
            "description": "<p>Mandatory author of Blogs Input Author Max Length : 100..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Viewers",
            "description": "<p>Mandatory viewers of Blogs Input Viewers Max Length : 11..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Created_at",
            "description": "<p>Mandatory created_at of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Updated_at",
            "description": "<p>Mandatory updated_at of Blogs .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "get",
    "url": "/blog/all",
    "title": "Get all Blogs.",
    "version": "0.1.0",
    "name": "Allblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "{} Cant be Accessed permission name : api_Blog_all"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
         
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Field",
            "defaultValue": "All Field",
            "description": "<p>Optional field of Blogs.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Start",
            "defaultValue": "0",
            "description": "<p>Optional start index of Blogs.</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": true,
            "field": "Limit",
            "defaultValue": "10",
            "description": "<p>Optional limit data of Blogs.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of Blog.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "NoDataBlog",
            "description": "<p>Blog data is nothing.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "post",
    "url": "/Blog/delete",
    "title": "Delete Blog.",
    "version": "0.1.0",
    "name": "Deleteblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_Blog_delete"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Blogs .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "get",
    "url": "/Blog/detail",
    "title": "Detail Blog.",
    "version": "0.1.0",
    "name": "Detailblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_Blog_detail"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
          {
            "group": "Parameter",
            "type": "Integer",
            "optional": false,
            "field": "Id",
            "description": "<p>Mandatory id of Blogs.</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "Array",
            "optional": false,
            "field": "Data",
            "description": "<p>data of Blog.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "BlogNotFound",
            "description": "<p>Blog data is not found.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },
  {
    "type": "post",
    "url": "/Blog/update",
    "title": "Update Blog.",
    "version": "0.1.0",
    "name": "Updateblog",
    "group": "blog",
    "header": {
      "fields": {
        "Header": [
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Api-Key",
            "description": "<p>Blogs unique access-key.</p>"
          },
          {
            "group": "Header",
            "type": "String",
            "optional": false,
            "field": "X-Token",
            "description": "<p>Blogs unique token.</p>"
          }
        ]
      }
    },
    "permission": [
      {
        "name": "Blog Cant be Accessed permission name : api_Blog_update"
      }
    ],
    "parameter": {
      "fields": {
        "Parameter": [
                    {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Slug",
            "description": "<p>Mandatory slug of Blogs Input Slug Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Content",
            "description": "<p>Mandatory content of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Title",
            "description": "<p>Mandatory title of Blogs Input Title Max Length : 255..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Image",
            "description": "<p>Mandatory image of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Category",
            "description": "<p>Mandatory category of Blogs Input Category Max Length : 200..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Tags",
            "description": "<p>Mandatory tags of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Status",
            "description": "<p>Mandatory status of Blogs Input Status Max Length : 10..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Author",
            "description": "<p>Mandatory author of Blogs Input Author Max Length : 100..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Viewers",
            "description": "<p>Mandatory viewers of Blogs Input Viewers Max Length : 11..</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Created_at",
            "description": "<p>Mandatory created_at of Blogs .</p>"
          },
          {
            "group": "Parameter",
            "type": "String",
            "optional": false,
            "field": "Updated_at",
            "description": "<p>Mandatory updated_at of Blogs .</p>"
          }
        ]
      }
    },
    "success": {
      "fields": {
        "Success 200": [
          {
            "group": "Success 200",
            "type": "Boolean",
            "optional": false,
            "field": "Status",
            "description": "<p>status response api.</p>"
          },
          {
            "group": "Success 200",
            "type": "String",
            "optional": false,
            "field": "Message",
            "description": "<p>message response api.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Success-Response:",
          "content": "HTTP/1.1 200 OK",
          "type": "json"
        }
      ]
    },
    "error": {
      "fields": {
        "Error 4xx": [
          {
            "group": "Error 4xx",
            "optional": false,
            "field": "ValidationError",
            "description": "<p>Error validation.</p>"
          }
        ]
      },
      "examples": [
        {
          "title": "Error-Response:",
          "content": "HTTP/1.1 403 Not Acceptable",
          "type": "json"
        }
      ]
    },
    "filename": "application/controllers/api/Blog.php",
    "groupTitle": "Blog"
  },{
"type": "post",
"url": "/blog_category/add",
"title": "Add Blog category.",
"version": "0.1.0",
"name": "Addblog_category",
"group": "blog_category",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Blog category unique access-key.</p>"
}
]
}
},
"permission": [
{
"name": "Blog category Cant be Accessed permission name : api_blog_category_add"
}
],
"parameter": {
"fields": {
"Parameter": [
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Category_name",
  "description": "<p>Mandatory category_name of Blog categorys Input Category Name Max Length : 200..</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Category_desc",
  "description": "<p>Mandatory category_desc of Blog categorys .</p>"
  }
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "ValidationError",
"description": "<p>Error validation.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Blog_category.php",
"groupTitle": "Blog category"
},
{
"type": "get",
"url": "/blog_category/all",
"title": "Get all Blog categorys.",
"version": "0.1.0",
"name": "Allblog_category",
"group": "blog_category",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Blog categorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Blog categorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "{} Cant be Accessed permission name : api_Blog category_all"
}
],
"parameter": {
"fields": {
"Parameter": [


{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Field",
"defaultValue": "All Field",
"description": "<p>Optional field of Blog categorys.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Start",
"defaultValue": "0",
"description": "<p>Optional start index of Blog categorys.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Limit",
"defaultValue": "10",
"description": "<p>Optional limit data of Blog categorys.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Sort_field",
"defaultValue": "category_id",
"description": "<p>Sort data by this field. category_id, category_name, category_desc</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Sort_order",
"defaultValue": "DESC",
"description": "<p>Sort data order this field ASC or DESC.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Filters",
"defaultValue": "",
"description": "<p>filters[0][lg] = <code>AND</code>, <code>OR</code><br>filters[0][co][0][fl] = <code>category_id</code><br>filters[0][co][0][op] = <code>equal</code>, <code>not_equal</code>, <code>greather</code>, <code>greather_equal</code>, <code>smaller_equal</code>, <code>smaller</code>, <code>is_null</code>, <code>not_null</code>, <code>where_in</code>, <code>where_not_in</code>, <code>like</code><br>filters[0][co][0][vl] = 1<br>filters[0][co][0][lg] = <code>OR</code>, <code>AND</code><br><br><br><span class=\"label \">Note</span> : if use like operator you need append <code>%your term%</code> on vl<br>for <code>BETWEEN</code> or <code>IN</code> you can use val1, val2, ..etc</p>"
}
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
},
{
"group": "Success 200",
"type": "Array",
"optional": false,
"field": "Data",
"description": "<p>data of Blog category.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "NoDataBlog category",
"description": "<p>Blog category data is nothing.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Blog category.php",
"groupTitle": "Blog category"
},
{
"type": "post",
"url": "/blog_category/delete",
"title": "Delete Blog category.",
"version": "0.1.0",
"name": "Deleteblog_category",
"group": "blog_category",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Blog categorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Blog categorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "Blog category Cant be Accessed permission name : api_Blog category_delete"
}
],
"parameter": {
"fields": {
"Parameter": [
{
"group": "Parameter",
"type": "Integer",
"optional": false,
"field": "Id",
"description": "<p>Mandatory id of Blog categorys .</p>"
}
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "ValidationError",
"description": "<p>Error validation.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Blog category.php",
"groupTitle": "Blog category"
},
{
"type": "get",
"url": "/blog_category/detail",
"title": "Detail Blog category.",
"version": "0.1.0",
"name": "Detailblog_category",
"group": "blog_category",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Blog categorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Blog categorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "Blog category Cant be Accessed permission name : api_Blog category_detail"
}
],
"parameter": {
"fields": {
"Parameter": [
{
"group": "Parameter",
"type": "Integer",
"optional": false,
"field": "Id",
"description": "<p>Mandatory id of Blog categorys.</p>"
}
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
},
{
"group": "Success 200",
"type": "Array",
"optional": false,
"field": "Data",
"description": "<p>data of Blog category.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "Blog categoryNotFound",
"description": "<p>Blog category data is not found.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Blog category.php",
"groupTitle": "Blog category"
},
{
"type": "post",
"url": "/blog_category/update",
"title": "Update Blog category.",
"version": "0.1.0",
"name": "Updateblog_category",
"group": "blog_category",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Blog categorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Blog categorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "Blog category Cant be Accessed permission name : api_Blog category_update"
}
],
"parameter": {
"fields": {
"Parameter": [
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Category_name",
  "description": "<p>Mandatory category_name of Blog categorys Input Category Name Max Length : 200..</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Category_desc",
  "description": "<p>Mandatory category_desc of Blog categorys .</p>"
  }
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "ValidationError",
"description": "<p>Error validation.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Blog category.php",
"groupTitle": "Blog category"
},{
"type": "post",
"url": "/inventory/add",
"title": "Add Inventory.",
"version": "0.1.0",
"name": "Addinventory",
"group": "inventory",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Inventory unique access-key.</p>"
}
,
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Inventory unique token.</p>"
}
]
}
},
"permission": [
{
"name": "Inventory Cant be Accessed permission name : api_inventory_add"
}
],
"parameter": {
"fields": {
"Parameter": [
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Name_of_pure_chemical",
  "description": "<p>Mandatory name_of_pure_chemical of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Chemical_formula",
  "description": "<p>Mandatory chemical_formula of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Location",
  "description": "<p>Mandatory location of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Date_registered",
  "description": "<p>Mandatory date_registered of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Registered_by",
  "description": "<p>Mandatory registered_by of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "State_of_chemical",
  "description": "<p>Mandatory state_of_chemical of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Chemical_color_group",
  "description": "<p>Mandatory chemical_color_group of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Cas_no",
  "description": "<p>Mandatory cas_no of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Brand",
  "description": "<p>Mandatory brand of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Lot_no",
  "description": "<p>Mandatory lot_no of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Container",
  "description": "<p>Mandatory container of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Storage_condition",
  "description": "<p>Mandatory storage_condition of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Original_amount",
  "description": "<p>Mandatory original_amount of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Estimated_current_mount",
  "description": "<p>Mandatory estimated_current_mount of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Date_of_receipt",
  "description": "<p>Mandatory date_of_receipt of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Received_by",
  "description": "<p>Mandatory received_by of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Date_of_expiration",
  "description": "<p>Mandatory date_of_expiration of Inventorys .</p>"
  }
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "ValidationError",
"description": "<p>Error validation.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Inventory.php",
"groupTitle": "Inventory"
},
{
"type": "get",
"url": "/inventory/all",
"title": "Get all Inventorys.",
"version": "0.1.0",
"name": "Allinventory",
"group": "inventory",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Inventorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Inventorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "{} Cant be Accessed permission name : api_Inventory_all"
}
],
"parameter": {
"fields": {
"Parameter": [


{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Field",
"defaultValue": "All Field",
"description": "<p>Optional field of Inventorys.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Start",
"defaultValue": "0",
"description": "<p>Optional start index of Inventorys.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Limit",
"defaultValue": "10",
"description": "<p>Optional limit data of Inventorys.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Sort_field",
"defaultValue": "chemical_code",
"description": "<p>Sort data by this field. chemical_code, name_of_pure_chemical, chemical_formula, location, date_registered, registered_by, state_of_chemical, chemical_color_group, cas_no, brand, lot_no, container, storage_condition, original_amount, estimated_current_mount, date_of_receipt, received_by, date_of_expiration</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Sort_order",
"defaultValue": "DESC",
"description": "<p>Sort data order this field ASC or DESC.</p>"
},
{
"group": "Parameter",
"type": "String",
"optional": true,
"field": "Filters",
"defaultValue": "",
"description": "<p>filters[0][lg] = <code>AND</code>, <code>OR</code><br>filters[0][co][0][fl] = <code>chemical_code</code><br>filters[0][co][0][op] = <code>equal</code>, <code>not_equal</code>, <code>greather</code>, <code>greather_equal</code>, <code>smaller_equal</code>, <code>smaller</code>, <code>is_null</code>, <code>not_null</code>, <code>where_in</code>, <code>where_not_in</code>, <code>like</code><br>filters[0][co][0][vl] = 1<br>filters[0][co][0][lg] = <code>OR</code>, <code>AND</code><br><br><br><span class=\"label \">Note</span> : if use like operator you need append <code>%your term%</code> on vl<br>for <code>BETWEEN</code> or <code>IN</code> you can use val1, val2, ..etc</p>"
}
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
},
{
"group": "Success 200",
"type": "Array",
"optional": false,
"field": "Data",
"description": "<p>data of Inventory.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "NoDataInventory",
"description": "<p>Inventory data is nothing.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Inventory.php",
"groupTitle": "Inventory"
},
{
"type": "post",
"url": "/inventory/delete",
"title": "Delete Inventory.",
"version": "0.1.0",
"name": "Deleteinventory",
"group": "inventory",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Inventorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Inventorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "Inventory Cant be Accessed permission name : api_Inventory_delete"
}
],
"parameter": {
"fields": {
"Parameter": [
{
"group": "Parameter",
"type": "Integer",
"optional": false,
"field": "Id",
"description": "<p>Mandatory id of Inventorys .</p>"
}
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "ValidationError",
"description": "<p>Error validation.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Inventory.php",
"groupTitle": "Inventory"
},
{
"type": "get",
"url": "/inventory/detail",
"title": "Detail Inventory.",
"version": "0.1.0",
"name": "Detailinventory",
"group": "inventory",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Inventorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Inventorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "Inventory Cant be Accessed permission name : api_Inventory_detail"
}
],
"parameter": {
"fields": {
"Parameter": [
{
"group": "Parameter",
"type": "Integer",
"optional": false,
"field": "Id",
"description": "<p>Mandatory id of Inventorys.</p>"
}
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
},
{
"group": "Success 200",
"type": "Array",
"optional": false,
"field": "Data",
"description": "<p>data of Inventory.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "InventoryNotFound",
"description": "<p>Inventory data is not found.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Inventory.php",
"groupTitle": "Inventory"
},
{
"type": "post",
"url": "/inventory/update",
"title": "Update Inventory.",
"version": "0.1.0",
"name": "Updateinventory",
"group": "inventory",
"header": {
"fields": {
"Header": [
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Api-Key",
"description": "<p>Inventorys unique access-key.</p>"
},
{
"group": "Header",
"type": "String",
"optional": false,
"field": "X-Token",
"description": "<p>Inventorys unique token.</p>"
}
]
}
},
"permission": [
{
"name": "Inventory Cant be Accessed permission name : api_Inventory_update"
}
],
"parameter": {
"fields": {
"Parameter": [
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Name_of_pure_chemical",
  "description": "<p>Mandatory name_of_pure_chemical of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Chemical_formula",
  "description": "<p>Mandatory chemical_formula of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Location",
  "description": "<p>Mandatory location of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Date_registered",
  "description": "<p>Mandatory date_registered of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Registered_by",
  "description": "<p>Mandatory registered_by of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "State_of_chemical",
  "description": "<p>Mandatory state_of_chemical of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Chemical_color_group",
  "description": "<p>Mandatory chemical_color_group of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Cas_no",
  "description": "<p>Mandatory cas_no of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Brand",
  "description": "<p>Mandatory brand of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Lot_no",
  "description": "<p>Mandatory lot_no of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Container",
  "description": "<p>Mandatory container of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Storage_condition",
  "description": "<p>Mandatory storage_condition of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Original_amount",
  "description": "<p>Mandatory original_amount of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Estimated_current_mount",
  "description": "<p>Mandatory estimated_current_mount of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Date_of_receipt",
  "description": "<p>Mandatory date_of_receipt of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Received_by",
  "description": "<p>Mandatory received_by of Inventorys .</p>"
  },
  {
  "group": "Parameter",
  "type": "String",
  "optional": false,
  "field": "Date_of_expiration",
  "description": "<p>Mandatory date_of_expiration of Inventorys .</p>"
  }
]
}
},
"success": {
"fields": {
"Success 200": [
{
"group": "Success 200",
"type": "Boolean",
"optional": false,
"field": "Status",
"description": "<p>status response api.</p>"
},
{
"group": "Success 200",
"type": "String",
"optional": false,
"field": "Message",
"description": "<p>message response api.</p>"
}
]
},
"examples": [
{
"title": "Success-Response:",
"content": "HTTP/1.1 200 OK",
"type": "json"
}
]
},
"error": {
"fields": {
"Error 4xx": [
{
"group": "Error 4xx",
"optional": false,
"field": "ValidationError",
"description": "<p>Error validation.</p>"
}
]
},
"examples": [
{
"title": "Error-Response:",
"content": "HTTP/1.1 403 Not Acceptable",
"type": "json"
}
]
},
"filename": "application/controllers/api/Inventory.php",
"groupTitle": "Inventory"
}] });
