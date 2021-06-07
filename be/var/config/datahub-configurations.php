<?php 

return [
    "folders" => [

    ],
    "list" => [
        "headless" => [
            "general" => [
                "active" => TRUE,
                "type" => "graphql",
                "name" => "headless",
                "description" => "",
                "sqlObjectCondition" => "",
                "modificationDate" => 1623091493,
                "path" => NULL
            ],
            "schema" => [
                "queryEntities" => [
                    "Page" => [
                        "id" => "Page",
                        "name" => "Page",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "Title",
                                        "label" => "Title",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "Title",
                                            "title" => "Title",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Body",
                                        "label" => "Body",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "Body",
                                            "title" => "Body",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "socialImage",
                                        "label" => "socialImage",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "socialImage",
                                            "title" => "socialImage",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "classname",
                                        "label" => "classname",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "classname",
                                            "name" => "classname",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "published",
                                        "label" => "published",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "published",
                                            "name" => "published",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "slug",
                                        "label" => "slug",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "^[a-z0-9]+(?:-[a-z0-9]+)*\$",
                                            "unique" => TRUE,
                                            "showCharCount" => FALSE,
                                            "name" => "slug",
                                            "title" => "slug",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "description",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => "",
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "name" => "description",
                                            "title" => "description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ],
                    "Post" => [
                        "id" => "Post",
                        "name" => "Post",
                        "columnConfig" => [
                            "columns" => [
                                [
                                    "attributes" => [
                                        "attribute" => "Title",
                                        "label" => "Title",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "Title",
                                            "title" => "Title",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "isOperator" => TRUE,
                                    "attributes" => [
                                        "label" => "Date",
                                        "type" => "operator",
                                        "class" => "DateFormatter",
                                        "format" => "c",
                                        "childs" => [
                                            [
                                                "isOperator" => FALSE,
                                                "attributes" => [
                                                    "label" => "Date",
                                                    "type" => "value",
                                                    "class" => "DefaultValue",
                                                    "attribute" => "Date",
                                                    "dataType" => "datetime",
                                                    "childs" => [

                                                    ]
                                                ]
                                            ]
                                        ]
                                    ],
                                    "key" => "#60be690c77f51"
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Text",
                                        "label" => "Text",
                                        "dataType" => "wysiwyg",
                                        "layout" => [
                                            "fieldtype" => "wysiwyg",
                                            "width" => "",
                                            "height" => "",
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "toolbarConfig" => "",
                                            "excludeFromSearchIndex" => FALSE,
                                            "name" => "Text",
                                            "title" => "Text",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "Draft",
                                        "label" => "Draft",
                                        "dataType" => "booleanSelect",
                                        "layout" => [
                                            "fieldtype" => "booleanSelect",
                                            "yesLabel" => "yes",
                                            "noLabel" => "no",
                                            "emptyLabel" => "empty",
                                            "options" => [
                                                [
                                                    "key" => "empty",
                                                    "value" => 0
                                                ],
                                                [
                                                    "key" => "yes",
                                                    "value" => 1
                                                ],
                                                [
                                                    "key" => "no",
                                                    "value" => -1
                                                ]
                                            ],
                                            "width" => "",
                                            "queryColumnType" => "tinyint(1) null",
                                            "columnType" => "tinyint(1) null",
                                            "name" => "Draft",
                                            "title" => "Draft",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "slug",
                                        "label" => "slug",
                                        "dataType" => "input",
                                        "layout" => [
                                            "fieldtype" => "input",
                                            "width" => "",
                                            "defaultValue" => NULL,
                                            "queryColumnType" => "varchar",
                                            "columnType" => "varchar",
                                            "columnLength" => 190,
                                            "regex" => "",
                                            "unique" => FALSE,
                                            "showCharCount" => FALSE,
                                            "name" => "slug",
                                            "title" => "slug",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "description",
                                        "label" => "description",
                                        "dataType" => "textarea",
                                        "layout" => [
                                            "fieldtype" => "textarea",
                                            "width" => "",
                                            "height" => "",
                                            "maxLength" => NULL,
                                            "showCharCount" => FALSE,
                                            "excludeFromSearchIndex" => FALSE,
                                            "queryColumnType" => "longtext",
                                            "columnType" => "longtext",
                                            "name" => "description",
                                            "title" => "description",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "socialImage",
                                        "label" => "socialImage",
                                        "dataType" => "image",
                                        "layout" => [
                                            "fieldtype" => "image",
                                            "queryColumnType" => "int(11)",
                                            "columnType" => "int(11)",
                                            "name" => "socialImage",
                                            "title" => "socialImage",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "relationType" => FALSE,
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE,
                                            "width" => "",
                                            "height" => "",
                                            "uploadPath" => ""
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "category",
                                        "label" => "category",
                                        "dataType" => "manyToOneRelation",
                                        "layout" => [
                                            "fieldtype" => "manyToOneRelation",
                                            "width" => "",
                                            "assetUploadPath" => "",
                                            "relationType" => TRUE,
                                            "queryColumnType" => [
                                                "id" => "int(11)",
                                                "type" => "enum('document','asset','object')"
                                            ],
                                            "objectsAllowed" => TRUE,
                                            "assetsAllowed" => FALSE,
                                            "assetTypes" => [

                                            ],
                                            "documentsAllowed" => FALSE,
                                            "documentTypes" => [

                                            ],
                                            "classes" => [
                                                [
                                                    "classes" => "Category"
                                                ]
                                            ],
                                            "pathFormatterClass" => "",
                                            "name" => "category",
                                            "title" => "category",
                                            "tooltip" => "",
                                            "mandatory" => FALSE,
                                            "noteditable" => FALSE,
                                            "index" => FALSE,
                                            "locked" => FALSE,
                                            "style" => "",
                                            "permissions" => NULL,
                                            "datatype" => "data",
                                            "invisible" => FALSE,
                                            "visibleGridView" => FALSE,
                                            "visibleSearch" => FALSE
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ],
                                [
                                    "attributes" => [
                                        "attribute" => "classname",
                                        "label" => "classname",
                                        "dataType" => "system",
                                        "layout" => [
                                            "title" => "classname",
                                            "name" => "classname",
                                            "datatype" => "data",
                                            "fieldtype" => "system"
                                        ]
                                    ],
                                    "isOperator" => FALSE
                                ]
                            ]
                        ]
                    ]
                ],
                "mutationEntities" => [

                ],
                "specialEntities" => [
                    "document" => [
                        "read" => FALSE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "document_folder" => [
                        "read" => FALSE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "asset" => [
                        "read" => FALSE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "asset_folder" => [
                        "read" => FALSE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "asset_listing" => [
                        "read" => FALSE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ],
                    "object_folder" => [
                        "read" => TRUE,
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE
                    ]
                ]
            ],
            "security" => [
                "method" => "datahub_apikey",
                "apikey" => "3f0211ccb5a2889957680360438e5676",
                "skipPermissionCheck" => TRUE
            ],
            "workspaces" => [
                "asset" => [

                ],
                "document" => [

                ],
                "object" => [
                    [
                        "read" => TRUE,
                        "cpath" => "/",
                        "create" => FALSE,
                        "update" => FALSE,
                        "delete" => FALSE,
                        "id" => "extModel696-2"
                    ]
                ]
            ]
        ]
    ]
];
