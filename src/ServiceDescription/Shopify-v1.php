<?php
/*
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the MIT license.
 */

return [
    'name'        => 'Shopify',
    'description' => 'Shopify is an awesome e-commerce platform',
    'operations'  => [
        /**
         * --------------------------------------------------------------------------------
         * ARTICLE RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/article
         * --------------------------------------------------------------------------------
         */

        'GetArticles' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/articles.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of articles',
            'data'             => ['root_key' => 'articles'],
            'parameters'       => [
                'created_at_max' => [
                    'description' => 'Max creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_max' => [
                    'description' => 'Max publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_min' => [
                    'description' => 'Min publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'title' => [
                    'description' => 'Filter by page title',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Filter by page handle',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_status' => [
                    'description' => 'Current status of the article',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['published', 'unpublished', 'any']
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],
        
        'GetBlogArticles' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/blogs/{blog_id}/articles.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of articles for a given blog',
            'data'             => ['root_key' => 'articles'],
            'parameters'       => [
                'blog_id' => [
                    'description' => 'Blog from which we need to extract articles',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'created_at_max' => [
                    'description' => 'Max creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_max' => [
                    'description' => 'Max publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_min' => [
                    'description' => 'Min publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'title' => [
                    'description' => 'Filter by page title',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Filter by page handle',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_status' => [
                    'description' => 'Current status of the article',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['published', 'unpublished', 'any']
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetArticle' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/articles/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific article',
            'data'             => ['root_key' => 'article'],
            'parameters'       => [
                'id' => [
                    'description' => 'Article ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],
        
        'GetBlogArticle' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/blogs/{blog_id}/articles/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific article from a given blog',
            'data'             => ['root_key' => 'article'],
            'parameters'       => [
                'id' => [
                    'description' => 'Article ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'blog_id' => [
                    'description' => 'Blog from which we need to extract articles',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetArticlesAuthors' => [
            'httpMethod'    => 'GET',
            'uri'           => 'admin/articles/authors.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Retrieve list of all article authors',
            'data'          => ['root_key' => 'authors'],
        ],

        'GetArticlesTags' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/blogs/{blog_id}/articles/tags.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve all tags for a given blog',
            'data'             => ['root_key' => 'tags'],
            'parameters'       => [
                'blog_id' => [
                    'description' => 'Blog from which we need to extract articles',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'popular' => [
                    'description' => 'A flag to inidicate only to a certain number of the most popular tags',
                    'location'    => 'query',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ]
            ]
        ],

        'CreateArticle' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/articles.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new article',
            'data'             => ['root_key' => 'article'],
            'parameters'       => [
                'title' => [
                    'description' => 'Article title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'author' => [
                    'description' => 'Author for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'tags' => [
                    'description' => 'Tags for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'HTML content for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'summary_html' => [
                    'description' => 'HTML content for the article\'s summary',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Handle for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Set the publication status',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'published_at' => [
                    'description' => 'Publication date for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Set the image (either through a base 64 attachment or URL)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'CreateBlogArticle' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/blogs/{blog_id}/articles.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new article',
            'data'             => ['root_key' => 'article'],
            'parameters'       => [
                'blog_id' => [
                    'description' => 'Blog from which we need to extract articles',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'title' => [
                    'description' => 'Article title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'author' => [
                    'description' => 'Author for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'tags' => [
                    'description' => 'Tags for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'HTML content for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'summary_html' => [
                    'description' => 'HTML content for the article\'s summary',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Handle for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Set the publication status',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'published_at' => [
                    'description' => 'Publication date for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Set the image (either through a base 64 attachment or URL)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateArticle' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/articles/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing article',
            'data'             => ['root_key' => 'article'],
            'parameters'       => [
                'id' => [
                    'description' => 'Article ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'title' => [
                    'description' => 'Article title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'author' => [
                    'description' => 'Author for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'tags' => [
                    'description' => 'Tags for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'HTML content for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'summary_html' => [
                    'description' => 'HTML content for the article\'s summary',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Handle for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Set the publication status',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'published_at' => [
                    'description' => 'Publication date for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Set the image (either through a base 64 attachment or URL)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateBlogArticle' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/blogs/{blog_id}/articles/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing article',
            'data'             => ['root_key' => 'article'],
            'parameters'       => [
                'id' => [
                    'description' => 'Article ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'blog_id' => [
                    'description' => 'Blog from which we need to extract articles',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'title' => [
                    'description' => 'Article title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'author' => [
                    'description' => 'Author for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'tags' => [
                    'description' => 'Tags for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'HTML content for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'summary_html' => [
                    'description' => 'HTML content for the article\'s summary',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Handle for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Set the publication status',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'published_at' => [
                    'description' => 'Publication date for the article',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Set the image (either through a base 64 attachment or URL)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeleteArticle' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/articles/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing article',
            'parameters'       => [
                'id' => [
                    'description' => 'Article ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        'DeleteBlogArticle' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/blogs/{blog_id}/articles/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing article',
            'parameters'       => [
                'id' => [
                    'description' => 'Article ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'blog_id' => [
                    'description' => 'Blog from which we need to extract articles',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * ASSETS RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/asset
         * --------------------------------------------------------------------------------
         */

        'GetAssets' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/themes/{theme_id}/assets.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of assets for a given theme',
            'data'             => ['root_key' => 'assets'],
            'parameters'       => [
                'theme_id' => [
                    'description' => 'Theme from which we need to extract assets',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetAsset' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/themes/{theme_id}/assets.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a single asset',
            'data'             => ['root_key' => 'asset'],
            'parameters'       => [
                'theme_id' => [
                    'description' => 'Theme from which we need to extract assets',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'key' => [
                    'description' => 'Complete key of the asset file',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => true,
                    'sentAs'      => 'asset[key]'
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateAsset' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/themes/{theme_id}/assets.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new asset in the given theme',
            'data'             => ['root_key' => 'asset'],
            'parameters'       => [
                'theme_id' => [
                    'description' => 'Theme from which we need to extract assets',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'key' => [
                    'description' => 'Complete key of the asset file',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'attachment' => [
                    'description' => 'Image through a base 64 encoded',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'src' => [
                    'description' => 'Image through an origin URL',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'value' => [
                    'description' => 'Set a Liquid file\'s value',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'UpdateAsset' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/themes/{theme_id}/assets.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new asset in the given theme',
            'data'             => ['root_key' => 'asset'],
            'parameters'       => [
                'theme_id' => [
                    'description' => 'Theme from which we need to extract assets',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'key' => [
                    'description' => 'Complete key of the asset file',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'attachment' => [
                    'description' => 'Image through a base 64 encoded',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'src' => [
                    'description' => 'Image through an origin URL',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'value' => [
                    'description' => 'Set a Liquid file\'s value',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'DeleteAsset' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/themes/{theme_id}/assets.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing asset',
            'parameters'       => [
                'theme_id' => [
                    'description' => 'Theme from which we need to extract assets',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'key' => [
                    'description' => 'Complete key of the asset file',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => true,
                    'sentAs'      => 'asset[key]'
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * CUSTOM COLLECTION RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/customcollection
         * --------------------------------------------------------------------------------
         */

        'GetCustomCollections' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/custom_collections.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of custom collections',
            'data'             => ['root_key' => 'custom_collections'],
            'parameters'       => [
                'title' => [
                    'description' => 'Only show custom collections with given title',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Filter by collection handle',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'product_id' => [
                    'description' => 'Show custom collections that includes given product',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'created_at_max' => [
                    'description' => 'Max creation date of the custom collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the custom collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the custom collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the custom collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_max' => [
                    'description' => 'Max publication date of the custom collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_min' => [
                    'description' => 'Min publication date of the custom collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_status' => [
                    'description' => 'Current status of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['published', 'unpublished', 'any']
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetCustomCollection' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/custom_collections/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific custom collection',
            'data'             => ['root_key' => 'custom_collection'],
            'parameters'       => [
                'id' => [
                    'description' => 'Custom collection ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateCustomCollection' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/custom_collections.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a custom collection',
            'data'             => ['root_key' => 'custom_collection'],
            'parameters'       => [
                'title' => [
                    'description' => 'Custom collection title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'body_html' => [
                    'description' => 'Collection description',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Status for the custom collection',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Attached image (can accept a "src" or "attachment" sub-parameter)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'collects' => [
                    'description' => 'Collect with list of product',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateCustomCollection' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/custom_collections/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update a custom collection',
            'data'             => ['root_key' => 'custom_collection'],
            'parameters'       => [
                'id' => [
                    'description' => 'Custom collection ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'title' => [
                    'description' => 'Custom collection title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'Collection description',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Status for the custom collection',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Attached image (can accept a "src" or "attachment" sub-parameter)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'collects' => [
                    'description' => 'Collect with list of product',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeleteCustomCollection' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/custom_collections/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete a custom collection',
            'parameters'       => [
                'id' => [
                    'description' => 'Custom collection ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * CUSTOMER RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/customer
         * --------------------------------------------------------------------------------
         */

        'GetCustomers' => [
            'httpMethod'    => 'GET',
            'uri'           => 'admin/customers.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Retrieve a list of customers',
            'data'          => ['root_key' => 'customers'],
            'parameters'    => [
                'ids' => [
                    'description' => 'A comma-separated list of customer ids',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false,
                ],
                'created_at_min' => [
                    'description' => 'Show customers created after date (format: 2014-04-25T16:15:47-04:00)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'created_at_max' => [
                    'description' => 'Show customers created before date (format: 2014-04-25T16:15:47-04:00)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'updated_at_min' => [
                    'description' => 'Show customers last updated after date (format: 2014-04-25T16:15:47-04:00)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'updated_at_max' => [
                    'description' => 'Show customers last updated before date (format: 2014-04-25T16:15:47-04:00)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'limit' => [
                    'description' => 'Amount of results',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false,
                ],
                'fields' => [
                    'description' => 'comma-separated list of fields to include in the response',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
            ],
        ],

        'SearchCustomers' => [
            'httpMethod'    => 'GET',
            'uri'           => 'admin/customers/search.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Searches for customers',
            'data'          => ['root_key' => 'customers'],
            'parameters'    => [
                'order' => [
                    'description' => 'Field and direction to order results by',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'query' => [
                    'description' => 'Text to search customers',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => true,
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false,
                ],
                'limit' => [
                    'description' => 'Amount of results',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false,
                ],
                'fields' => [
                    'description' => 'comma-separated list of fields to include in the response',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
            ],
        ],

        'GetCustomer' => [
            'httpMethod'    => 'GET',
            'uri'           => 'admin/customers/{id}.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Receive a single customer',
            'data'          => ['root_key' => 'customer'],
            'parameters'    => [
                'id' => [
                    'description' => 'Customer ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'fields' => [
                    'description' => 'Comma-separated list of fields to include in the response',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
            ],
        ],

        'CreateCustomer' => [
            'httpMethod'    => 'POST',
            'uri'           => 'admin/customers.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Create a new customer',
            'data'          => ['root_key' => 'customer'],
            'parameters'    => [
                'accepts_marketing' => [
                    'description' => 'Indicates whether the customer has consented to be sent marketing material via email',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'addresses' => [
                    'description' => 'A list of addresses for the customer',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'email' => [
                    'description' => 'The email address of the customer',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'phone' => [
                    'description' => 'The phone number for the customer',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'first_name' => [
                    'description' => 'The customer\'s first name',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                ],
                'last_name' => [
                    'description' => 'The customer\'s last name',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                ],
                'note' => [
                    'description' => 'Set a short note about the customer',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'tags' => [
                    'description' => 'Tags are additional short descriptors formatted as a string of comma-separated values',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'tax_exempt' => [
                    'description' => 'Indicates whether the customer should be charged taxes when placing orders',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'verified_email' => [
                    'description' => 'States whether or not the email address has been verified',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'password' => [
                    'description' => 'Force using a given password',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'password_confirmation' => [
                    'description' => 'Force using a given password (confirmation)',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'send_email_welcome' => [
                    'description' => 'Send or not a welcome email',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'send_email_invite' => [
                    'description' => 'Send or not an invite email',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ]
            ],
        ],

        'UpdateCustomer' => [
            'httpMethod'    => 'PUT',
            'uri'           => 'admin/customers/{id}.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Modify an existing customer',
            'data'          => ['root_key' => 'customer'],
            'parameters'    => [
                'id' => [
                    'description' => 'Customer ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'accepts_marketing' => [
                    'description' => 'Indicates whether the customer has consented to be sent marketing material via email',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'addresses' => [
                    'description' => 'A list of addresses for the customer',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'email' => [
                    'description' => 'The email address of the customer',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'phone' => [
                    'description' => 'The phone number for the customer',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'first_name' => [
                    'description' => 'The customer\'s first name',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'last_name' => [
                    'description' => 'The customer\'s last name',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'note' => [
                    'description' => 'Set a short note about the customer',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'tags' => [
                    'description' => 'Tags are additional short descriptors formatted as a string of comma-separated values',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'tax_exempt' => [
                    'description' => 'Indicates whether the customer should be charged taxes when placing orders',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'verified_email' => [
                    'description' => 'States whether or not the email address has been verified',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
            ]
        ],

        'DeleteCustomer' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/customers/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Remove a customer from the database',
            'parameters'       => [
                'id' => [
                    'description' => 'Customer ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
            ],
        ],

        /**
         * --------------------------------------------------------------------------------
         * EVENTS RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/events
         * --------------------------------------------------------------------------------
         */

        'GetEvents' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/events.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of events',
            'data'             => ['root_key' => 'events'],
            'parameters'       => [
                'filter' => [
                    'description' => 'Only show events specified in filter',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'verb' => [
                    'description' => 'Only show events specified of a certain kind',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_max' => [
                    'description' => 'Max creation date of the event',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the event',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetEvent' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/events/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific event',
            'data'             => ['root_key' => 'event'],
            'parameters'       => [
                'id' => [
                    'description' => 'Page ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * FULFILLMENT RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/reference/fulfillment
         * --------------------------------------------------------------------------------
         */

        'GetFulfillments' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/orders/{order_id}/fulfillments.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of fulfillments for a given order',
            'data'             => ['root_key' => 'fulfillments'],
            'parameters'       => [
                'order_id' => [
                    'description' => 'Order from which we need to extract fulfillments',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'created_at_max' => [
                    'description' => 'Max creation date of the fulfillment',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the fulfillment',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the fulfillment',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the fulfillment',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetFulfillment' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/orders/{order_id}/fulfillments/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific order',
            'data'             => ['root_key' => 'fulfillment'],
            'parameters'       => [
                'id' => [
                    'description' => 'Fulfillment ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'order_id' => [
                    'description' => 'Order from which we need to extract fulfillments',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateFulfillment' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{order_id}/fulfillments.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a fulfillment for a given order',
            'data'             => ['root_key' => 'fulfillment'],
            'parameters'       => [
                'order_id' => [
                    'description' => 'Order from which we need to extract fulfillments',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'line_items' => [
                    'description' => 'An array of line items. Each line item can have ID and quantity',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'tracking_number' => [
                    'description' => 'Tracking number to use',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'tracking_numbers' => [
                    'description' => 'Tracking numbers to use',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'tracking_url' => [
                    'description' => 'Tracking URL to use',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'tracking_company' => [
                    'description' => 'Tracking company to use',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'notify_customer' => [
                    'description' => 'If set to true, an email is sent to the customer',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
            ]
        ],

        'UpdateFulfillment' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/orders/{order_id}/fulfillments/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update a fulfillment for a given order',
            'data'             => ['root_key' => 'fulfillment'],
            'parameters'       => [
                'id' => [
                    'description' => 'Fulfillment ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'order_id' => [
                    'description' => 'Order from which we need to extract fulfillments',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'tracking_number' => [
                    'description' => 'Tracking number to use',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
            ]
        ],

        'CompleteFulfillment' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{order_id}/fulfillments/{id}/complete.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Complete a pending fulfillment',
            'data'             => ['root_key' => 'fulfillment'],
            'parameters'       => [
                'id' => [
                    'description' => 'Fulfillment ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'order_id' => [
                    'description' => 'Order from which we need to extract fulfillments',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
            ]
        ],

        'CancelFulfillment' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{order_id}/fulfillments/{id}/cancel.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Cancel a pending fulfillment',
            'data'             => ['root_key' => 'fulfillment'],
            'parameters'       => [
                'id' => [
                    'description' => 'Fulfillment ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'order_id' => [
                    'description' => 'Order from which we need to extract fulfillments',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * GIFT CARD RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/reference/gift_card
         * --------------------------------------------------------------------------------
         */

        'GetGiftCards' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/gift_cards.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Receive a list of all Gift Cards',
            'data'             => ['root_key' => 'gift_cards'],
            'parameters'       => [
                'status' => [
                    'description' => 'Restrict results to only enabled/disabled gift cards',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false,
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false,
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
            ],
        ],

        'GetGiftCard' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/gift_cards/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Receive a single Gift Card',
            'data'             => ['root_key' => 'gift_card'],
            'parameters'       => [
                'id' => [
                    'description' => 'Gift Card ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
            ],
        ],

        'CreateGiftCard' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/gift_cards.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new Gift Card',
            'data'             => ['root_key' => 'gift_card'],
            'parameters'       => [
                'note' => [
                    'description' => 'The text of an optional note that a shop owner can attach to the gift card',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'initial_value' => [
                    'description' => 'The initial Gift Card value',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                ],
                'code' => [
                    'description' => 'The gift card code which consists of a minimum of 8 alphanumeric characters',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'template_suffix' => [
                    'description' => 'When specified, the gift card will be rendered using gift_card.SUFFIX.liquid instead of gift_card.liquid',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'expires_on' => [
                    'description' => 'Expiration date (format YYYY-MM-DD)',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ]
            ],
        ],

        'UpdateGiftCard' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/gift_cards/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update the Gift Card',
            'data'             => ['root_key' => 'gift_card'],
            'parameters'       => [
                'id' => [
                    'description' => 'Gift Card ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'note' => [
                    'description' => 'The text of an optional note that a shop owner can attach to the gift card',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'expires_on' => [
                    'description' => 'Expiration date (format YYYY-MM-DD)',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ]
            ],
        ],

        'DisableGiftCard' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/gift_cards/{id}/disable.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Disabling a Gift Card is permanent and cannot be undone',
            'data'             => ['root_key' => 'gift_card'],
            'parameters'       => [
                'id' => [
                    'description' => 'Gift Card ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
            ],
        ],

        /**
         * --------------------------------------------------------------------------------
         * METAFIELDS RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/metafield
         * --------------------------------------------------------------------------------
         */

        'GetMetafields' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/metafields.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of metafields',
            'data'             => ['root_key' => 'metafields'],
            'parameters'       => [
                'created_at_max' => [
                    'description' => 'Max creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'namespace' => [
                    'description' => 'Filter metafields by namespace',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'key' => [
                    'description' => 'Filter metafields by key',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'value_type' => [
                    'description' => 'Filter metafields by value type',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['string', 'integer']
                ],
                'metafield' => [
                    'description' => 'Filter metafields by resource type and ID (accepts sub-fields "owner_id" and "owner_resource")',
                    'location'    => 'query',
                    'type'        => 'object',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetMetafield' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/metafields/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific metafield',
            'data'             => ['root_key' => 'metafield'],
            'parameters'       => [
                'id' => [
                    'description' => 'Metafield ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateMetafield' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/metafields.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new metafield',
            'data'             => ['root_key' => 'metafield'],
            'parameters'       => [
                'namespace' => [
                    'description' => 'Namespace to use',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'key' => [
                    'description' => 'Key to use',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'value' => [
                    'description' => 'Value type',
                    'location'    => 'json',
                    'type'        => ['string', 'integer'],
                    'required'    => true
                ],
                'value_type' => [
                    'description' => 'Metafield value type',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['string', 'integer']
                ],
                'description' => [
                    'description' => 'Optional description to use',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'UpdateMetafield' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/metafields/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update a specific metafield',
            'data'             => ['root_key' => 'metafield'],
            'parameters'       => [
                'id' => [
                    'description' => 'Metafield ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'value' => [
                    'description' => 'Value type',
                    'location'    => 'json',
                    'type'        => ['string', 'integer'],
                    'required'    => true
                ],
                'value_type' => [
                    'description' => 'Metafield value type',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['string', 'integer']
                ]
            ]
        ],

        'DeleteMetafield' => [
            'httpMethod'    => 'DELETE',
            'uri'           => 'admin/metafields/{id}.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Delete specific metafield',
            'parameters'    => [
                'id' => [
                    'description' => 'Metafield ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * ORDER RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/order
         * --------------------------------------------------------------------------------
         */

        'GetOrders' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/orders.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of orders',
            'data'             => ['root_key' => 'orders'],
            'parameters'       => [
                'ids' => [
                    'description' => 'Comma separated list of orders',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'status' => [
                    'description' => 'Status of the order',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['open', 'closed', 'cancelled', 'any']
                ],
                'financial_status' => [
                    'description' => 'Financial status of the order',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => [
                        'authorized', 'pending', 'paid', 'partially_paid',
                        'refunded', 'voided', 'partially_refunded', 'any', 'unpaid'
                    ]
                ],
                'fulfillment_status' => [
                    'description' => 'Fulfillment status of the order',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['shipped', 'partial', 'unshipped', 'any']
                ],
                'name' => [
                    'description' => 'Order name (number without leading #)',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateOrder' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new order',
            'data'             => ['root_key' => 'order'],
            'parameters'       => [
                'billing_address' => [
                    'description' => 'The mailing address associated with the payment method',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false,
                ],
                'buyer_accepts_marketing' => [
                    'description' => 'Indicates whether or not the person who placed the order would like to receive email updates from the shop',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'closed_at' => [
                    'description' => 'The date and time when the order was closed',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'currency' => [
                    'description' => 'The three letter code (ISO 4217) for the currency used for the payment',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'customer' => [
                    'description' => 'An object containing information about the customer',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false,
                ],
                'discount_codes' => [
                    'description' => 'Applicable discount codes that can be applied to the order',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'email' => [
                    'description' => 'The customer\'s email address',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'send_receipt' => [
                    'description' => 'Determines whether an order confirmation will be sent to the customer',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'send_fulfillment_receipt' => [
                    'description' => 'Determines whether a fulfillment confirmation will be sent to the customer',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'financial_status' => [
                    'description' => 'The order financial status',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'fulfillments' => [
                    'description' => 'The order fulfillments',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'fulfillment_status' => [
                    'description' => 'The order fulfillment status',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'tags' => [
                    'description' => 'Tags are additional short descriptors',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'line_items' => [
                    'description' => 'The order line items',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'location_id' => [
                    'description' => 'The unique numeric identifier for the physical location at which the order was processed',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false,
                ],
                'note' => [
                    'description' => 'The text of an optional note that a shop owner can attach to the order',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'note_attributes' => [
                    'description' => 'Extra information that is added to the order',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'processed_at' => [
                    'description' => 'The date and time when the order was imported',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'processing_method' => [
                    'description' => 'States the type of payment processing method',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'referring_site' => [
                    'description' => 'The website that the customer clicked on to come to the shop',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'refunds' => [
                    'description' => 'The list of refunds applied to the order',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'shipping_address' => [
                    'description' => 'Customer\'s shipping address',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false,
                ],
                'shipping_lines' => [
                    'description' => 'An array of shipping_line objects',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'source_name' => [
                    'description' => 'Where the order originated',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'subtotal_price' => [
                    'description' => 'Price of the order before shipping and taxes',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'tax_lines' => [
                    'description' => 'An array of tax_line objects',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'taxes_included' => [
                    'description' => 'States whether or not taxes are included in the order subtotal',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'total_discounts' => [
                    'description' => 'The total amount of the discounts to be applied to the price of the order',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'total_line_items_price' => [
                    'description' => 'The sum of all the prices of all the items in the order',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'total_price' => [
                    'description' => 'The sum of all the prices of all the items in the order, taxes and discounts included',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'total_tax' => [
                    'description' => 'The sum of all the taxes applied to the order',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'total_weight' => [
                    'description' => 'The sum of all the weights of the line items in the order, in grams',
                    'location'    => 'json',
                    'type'        => 'number',
                    'required'    => false,
                ],
               'transactions' => [
                    'description' => 'Payment transactions related to this order',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ],
        ],

        'UpdateOrder' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/orders/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing order',
            'data'             => ['root_key' => 'order'],
            'parameters'       => [
                'id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'email' => [
                    'description' => 'The customer\'s email address',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'customer' => [
                    'description' => 'An object containing information about the customer',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false,
                ],
                'shipping_address' => [
                    'description' => 'Customer\'s shipping address',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false,
                ],
                'tags' => [
                    'description' => 'Tags are additional short descriptors',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'note' => [
                    'description' => 'The text of an optional note that a shop owner can attach to the order',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'note_attributes' => [
                    'description' => 'Extra information that is added to the order',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
            ],
        ],

        'GetOrder' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/orders/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific order',
            'data'             => ['root_key' => 'order'],
            'parameters'       => [
                'id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CloseOrder' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{id}/close.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Close a specific order',
            'data'             => ['root_key' => 'order'],
            'parameters'       => [
                'id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        'OpenOrder' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{id}/open.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Re-open a closed order',
            'data'             => ['root_key' => 'order'],
            'parameters'       => [
                'id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        'CancelOrder' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{id}/cancel.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Cancel a given order',
            'data'             => ['root_key' => 'order'],
            'parameters'       => [
                'id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'restock' => [
                    'description' => 'Restock the items for this order back to your store',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'reason' => [
                    'description' => 'The reason for the order cancellation',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['customer', 'fraud', 'inventory', 'other']
                ],
                'email' => [
                    'description' => 'Send an email to the customer notifying them of the cancellation',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * PAGE RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/page
         * --------------------------------------------------------------------------------
         */

        'GetPages' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/pages.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of pages',
            'data'             => ['root_key' => 'pages'],
            'parameters'       => [
                'created_at_max' => [
                    'description' => 'Max creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_max' => [
                    'description' => 'Max publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_min' => [
                    'description' => 'Min publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'title' => [
                    'description' => 'Filter by page title',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Filter by page handle',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_status' => [
                    'description' => 'Current status of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['published', 'unpublished', 'any']
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetPage' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/pages/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific page',
            'data'             => ['root_key' => 'page'],
            'parameters'       => [
                'id' => [
                    'description' => 'Page ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreatePage' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/pages.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new page',
            'data'             => ['root_key' => 'page'],
            'parameters'       => [
                'title' => [
                    'description' => 'Page title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'body_html' => [
                    'description' => 'HTML content for the page',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'handle' => [
                    'description' => 'Handle for the page',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdatePage' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/pages/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing page',
            'data'             => ['root_key' => 'page'],
            'parameters'       => [
                'id' => [
                    'description' => 'Page ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'title' => [
                    'description' => 'Page title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Handle for the page',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'HTML content for the page',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Set the publication status',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeletePage' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/pages/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing page',
            'parameters'       => [
                'id' => [
                    'description' => 'Page ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * PRODUCT RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/product
         * --------------------------------------------------------------------------------
         */

        'GetProducts' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/products.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of products',
            'data'             => ['root_key' => 'products'],
            'parameters'       => [
                'ids' => [
                    'description' => 'A comma separated ids',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_max' => [
                    'description' => 'Max creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_max' => [
                    'description' => 'Max publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_min' => [
                    'description' => 'Min publication date of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'title' => [
                    'description' => 'Filter by product title',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'vendor' => [
                    'description' => 'Filter by product vendor',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Filter by product handle',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'collection_id' => [
                    'description' => 'Filter by collection id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'published_status' => [
                    'description' => 'Current status of the product',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['published', 'unpublished', 'any']
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetProduct' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/products/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific product',
            'data'             => ['root_key' => 'product'],
            'parameters'       => [
                'id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateProduct' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/products.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new product',
            'data'             => ['root_key' => 'product'],
            'parameters'       => [
                'title' => [
                    'description' => 'Product title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'body_html' => [
                    'description' => 'Product description',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'vendor' => [
                    'description' => 'Product vendor',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'product_type' => [
                    'description' => 'Product type',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'images' => [
                    'description' => 'List of images. Each element can either contain all the attributes accepted by a product image',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'tags' => [
                    'description' => 'List of tags separated by comma',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'variants' => [
                    'description' => 'List of variants. Each element can either contain all the attributes accepted by a product variant',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Set the publication status',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateProduct' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/products/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing product',
            'data'             => ['root_key' => 'product'],
            'parameters'       => [
                'id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'title' => [
                    'description' => 'Product title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'Product description',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'vendor' => [
                    'description' => 'Product vendor',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'product_type' => [
                    'description' => 'Product type',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'images' => [
                    'description' => 'List of images. Each element can either contain all the attributes accepted by a product image',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'tags' => [
                    'description' => 'List of tags separated by comma',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'variants' => [
                    'description' => 'List of variants. Each element can either contain all the attributes accepted by a product variant',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Set the publication status',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeleteProduct' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/products/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing product',
            'parameters'       => [
                'id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * PRODUCT IMAGES RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/product_image
         * --------------------------------------------------------------------------------
         */

        'GetProductImages' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/products/{product_id}/images.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of product images',
            'data'             => ['root_key' => 'images'],
            'parameters'       => [
                'product_id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetProductImage' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/products/{product_id}/images/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific product image',
            'data'             => ['root_key' => 'image'],
            'parameters'       => [
                'id' => [
                    'description' => 'Product image ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'product_id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateProductImage' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/products/{product_id}/images.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new product image',
            'data'             => ['root_key' => 'image'],
            'parameters'       => [
                'product_id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'variant_ids' => [
                    'description' => 'Variant ids attached to this image',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'attachment' => [
                    'description' => 'Base 64 encoded of the image',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'src' => [
                    'description' => 'Source URL that will be downloaded by Shopify',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'filename' => [
                    'description' => 'Name of the file to upload',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'position' => [
                    'description' => 'Position of the image for the product',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateProductImage' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/products/{product_id}/images/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing product image',
            'data'             => ['root_key' => 'image'],
            'parameters'       => [
                'id' => [
                    'description' => 'Product image ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'product_id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'variant_ids' => [
                    'description' => 'Variant ids attached to this image',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'attachment' => [
                    'description' => 'Base 64 encoded of the image',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'src' => [
                    'description' => 'Source URL that will be downloaded by Shopify',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'filename' => [
                    'description' => 'Name of the file to upload',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'position' => [
                    'description' => 'Position of the image for the product',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeleteProductImage' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/products/{product_id}/images/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing product image',
            'parameters'       => [
                'id' => [
                    'description' => 'Product image ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'product_id' => [
                    'description' => 'Product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * RECURRING APPLICATION CHARGES RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/recurringapplicationcharge
         * --------------------------------------------------------------------------------
         */

        'GetRecurringApplicationCharges' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/recurring_application_charges.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of recurring application charges',
            'data'             => ['root_key' => 'recurring_application_charges'],
            'parameters'       => [
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetRecurringApplicationCharge' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/recurring_application_charges/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a specific recurring application charge',
            'data'             => ['root_key' => 'recurring_application_charge'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific recurring application charge ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateRecurringApplicationCharge' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/recurring_application_charges.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new recurring application charge',
            'data'             => ['root_key' => 'recurring_application_charge'],
            'parameters'       => [
                'name' => [
                    'description' => 'Plan name',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'price' => [
                    'description' => 'Price to charge',
                    'location'    => 'json',
                    'type'        => 'number',
                    'required'    => true
                ],
                'return_url' => [
                    'description' => 'URL where Shopify must return once the charge has been accepted',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'capped_amount' => [
                    'description' => 'Capped amount (to use with usage charge)',
                    'location'    => 'json',
                    'type'        => 'number',
                    'required'    => false
                ],
                'terms' => [
                    'description' => 'Terms displayed to the merchant when accepting the charge (to use with usage charge)',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'test' => [
                    'description' => 'Test mode for the charge',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'trial_days' => [
                    'description' => 'Number of days for allowing trial',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ]
            ]
        ],

        'ActivateRecurringApplicationCharge' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/recurring_application_charges/{id}/activate.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Activate a previously accepted recurring application charge',
            'data'             => ['root_key' => 'recurring_application_charge'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific recurring application charge ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        'DeleteRecurringApplicationCharge' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/recurring_application_charges/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing recurring application charge',
            'parameters'       => [
                'id' => [
                    'description' => 'Specific recurring application charge ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * REFUND RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/refund
         * --------------------------------------------------------------------------------
         */

        'GetRefunds' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/orders/{order_id}/refunds.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of Refunds for an Order',
            'data'             => ['root_key' => 'refunds'],
            'parameters'       => [
                'order_id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
            ],
        ],

        'GetRefund' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/orders/{order_id}/refunds/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a specific refund',
            'data'             => ['root_key' => 'refund'],
            'parameters'       => [
                'order_id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'id' => [
                    'description' => 'Specific refund ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                ],
            ],
        ],

        'CalculateRefund' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{order_id}/refunds/calculate.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Calculate refund transactions based on line items and shipping',
            'data'             => ['root_key' => 'refund'],
            'parameters'       => [
                'order_id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'shipping' => [
                    'description' => 'Object to specify how much shipping to refund',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false,
                ],
                'refund_line_items' => [
                    'description' => 'Array of line item IDs and quantities to refund',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
            ],
        ],

        'CreateRefund' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/orders/{order_id}/refunds.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a Refund for an existing Order',
            'data'             => ['root_key' => 'refund'],
            'parameters'       => [
                'order_id' => [
                    'description' => 'Order ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true,
                ],
                'restock' => [
                    'description' => 'Whether or not to add the line items back to the store inventory',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'notify' => [
                    'description' => 'Set to true to send a refund notification to the customer',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false,
                ],
                'note' => [
                    'description' => 'An optional comment attached to a refund',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'discrepancy_reason' => [
                    'description' => 'An optional comment, used if there is a discrepancy between calculated and actual refund amounts (one of: restock, damage, customer, other)',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                ],
                'shipping' => [
                    'description' => 'Object to specify how much shipping to refund',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false,
                ],
                'refund_line_items' => [
                    'description' => 'Array of line item IDs and quantities to refund',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
                'transactions' => [
                    'description' => 'Array of transactions to process as refunds',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false,
                ],
            ],
        ],

        /**
         * --------------------------------------------------------------------------------
         * SHOP RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/shop
         * --------------------------------------------------------------------------------
         */

        'GetShop' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/shop.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Get data about a single shop',
            'data'             => ['root_key' => 'shop'],
            'parameters'       => [
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * SMART COLLECTION RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/smartcollection
         * --------------------------------------------------------------------------------
         */

        'GetSmartCollections' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/smart_collections.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of smart collections',
            'data'             => ['root_key' => 'smart_collections'],
            'parameters'       => [
                'title' => [
                    'description' => 'Only show smart collections with given title',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'handle' => [
                    'description' => 'Filter by collection handle',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'product_id' => [
                    'description' => 'Show smart collections that includes given product',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'created_at_max' => [
                    'description' => 'Max creation date of the smart collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the smart collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the smart collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the smart collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_max' => [
                    'description' => 'Max publication date of the smart collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_at_min' => [
                    'description' => 'Min publication date of the smart collection',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published_status' => [
                    'description' => 'Current status of the page',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['published', 'unpublished', 'any']
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetSmartCollection' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/smart_collections/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve specific smart collection',
            'data'             => ['root_key' => 'smart_collection'],
            'parameters'       => [
                'id' => [
                    'description' => 'Smart collection ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateSmartCollection' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/smart_collections.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a smart collection',
            'data'             => ['root_key' => 'smart_collection'],
            'parameters'       => [
                'title' => [
                    'description' => 'Smart collection title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'body_html' => [
                    'description' => 'Collection description',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Status for the smart collection',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Attached image (can accept a "src" or "attachment" sub-parameter)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'rules' => [
                    'description' => 'Specify the rules that need to be matched to include products within the collection',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateSmartCollection' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/smart_collections/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update a smart collection',
            'data'             => ['root_key' => 'smart_collection'],
            'parameters'       => [
                'id' => [
                    'description' => 'Smart collection ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'title' => [
                    'description' => 'Smart collection title',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'body_html' => [
                    'description' => 'Collection description',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'published' => [
                    'description' => 'Status for the smart collection',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'image' => [
                    'description' => 'Attached image (can accept a "src" or "attachment" sub-parameter)',
                    'location'    => 'json',
                    'type'        => 'object',
                    'required'    => false
                ],
                'rules' => [
                    'description' => 'Specify the rules that need to be matched to include products within the collection',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeleteSmartCollection' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/smart_collections/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete a smart collection',
            'parameters'       => [
                'id' => [
                    'description' => 'Smart collection ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * THEME RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/theme
         * --------------------------------------------------------------------------------
         */

        'GetThemes' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/themes.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of themes',
            'data'             => ['root_key' => 'themes'],
            'parameters'       => [
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetTheme' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/themes/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a specific theme',
            'data'             => ['root_key' => 'theme'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific webhook ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateTheme' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/themes.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new theme',
            'data'             => ['root_key' => 'theme'],
            'parameters'       => [
                'name' => [
                    'description' => 'Name of the theme',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'src' => [
                    'description' => 'Zip source for the theme',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'role' => [
                    'description' => 'Theme role name',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['main', 'mobile', 'unpublished']
                ]
            ]
        ],

        'UpdateTheme' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/themes/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing theme',
            'data'             => ['root_key' => 'theme'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific theme ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'name' => [
                    'description' => 'Name of the theme',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'role' => [
                    'description' => 'Theme role name',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['main', 'mobile', 'unpublished']
                ]
            ]
        ],

        'DeleteTheme' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/themes/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing theme',
            'parameters'       => [
                'id' => [
                    'description' => 'Specific theme ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * PRODUCT VARIANT RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/product_variant
         * --------------------------------------------------------------------------------
         */

        'GetProductVariants' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/products/{product_id}/variants.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Get all variants for the given product',
            'data'             => ['root_key' => 'variants'],
            'parameters'       => [
                'product_id' => [
                    'description' => 'Specific product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetProductVariant' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/variants/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a specific variant',
            'data'             => ['root_key' => 'variant'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific variant ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateProductVariant' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/products/{product_id}/variants.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new variant',
            'data'             => ['root_key' => 'variant'],
            'parameters'       => [
                'product_id' => [
                    'description' => 'Specific product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'option1' => [
                    'description' => 'Option 1',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'option2' => [
                    'description' => 'Option 2',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'option3' => [
                    'description' => 'Option 3',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'price' => [
                    'description' => 'Price for the variant',
                    'location'    => 'json',
                    'type'        => 'number',
                    'required'    => false
                ],
                'inventory_quantity' => [
                    'description' => 'Current inventory quantity',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'old_inventory_quantity' => [
                    'description' => 'Old inventory quantity',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'inventory_quantity_adjustment' => [
                    'description' => 'Modify inventory by the given amount',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'image_id' => [
                    'description' => 'Image to attach for the variant',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateProductVariant' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/variants/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing variant',
            'data'             => ['root_key' => 'variant'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific variant ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'option1' => [
                    'description' => 'Option 1',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'option2' => [
                    'description' => 'Option 2',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'option3' => [
                    'description' => 'Option 3',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'price' => [
                    'description' => 'Price for the variant',
                    'location'    => 'json',
                    'type'        => 'number',
                    'required'    => false
                ],
                'inventory_quantity' => [
                    'description' => 'Current inventory quantity',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'old_inventory_quantity' => [
                    'description' => 'Old inventory quantity',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'inventory_quantity_adjustment' => [
                    'description' => 'Modify inventory by the given amount',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'image_id' => [
                    'description' => 'Image to attach for the variant',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'metafields' => [
                    'description' => 'Optional metafields to attach',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeleteProductVariant' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/products/{product_id}/variants/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing variant for the given product',
            'parameters'       => [
                'id' => [
                    'description' => 'Specific variant ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'product_id' => [
                    'description' => 'Specific product ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * REDIRECT RELATED METHODS
         *
         * DOC: https://help.shopify.com/api/reference/redirect
         * --------------------------------------------------------------------------------
         */

        'GetRedirects' => [
            'httpMethod'           => 'GET',
            'uri'                  => 'admin/redirects.json',
            'responseModel'        => 'GenericModel',
            'summary'              => 'Retrieve a list of redirects',
            'data'                 => ['root_key' => 'redirects'],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],

        'GetRedirect' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/redirects/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a specific redirect',
            'data'             => ['root_key' => 'redirect'],
            'parameters'       => [
                'id' => [
                    'description' => 'Redirect ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
            ],
            'additionalParameters' => [
                'location' => 'query',
            ],
        ],

        'CreateRedirect' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/redirects.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a redirect',
            'data'             => ['root_key' => 'redirect'],
            'parameters'       => [
                'path' => [
                    'description' => 'Path URL',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'target' => [
                    'description' => 'Target URL',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
            ]
        ],

        'UpdateRedirect' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/redirects/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing redirect',
            'data'             => ['root_key' => 'redirect'],
            'parameters'       => [
                'path' => [
                    'description' => 'Path URL',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'target' => [
                    'description' => 'Target URL',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
            ]
        ],

        'DeleteRedirect' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/redirects/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing redirect',
            'parameters'       => [
                'id' => [
                    'description' => 'Redirect ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * SCRIPT TAGS RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/scripttag
         * --------------------------------------------------------------------------------
         */

        'GetScriptTags' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/script_tags.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of installed script tags',
            'data'             => ['root_key' => 'script_tags'],
            'parameters'       => [
                'created_at_max' => [
                    'description' => 'Max creation date of the script tag',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the script tag',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the script tag',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the script tag',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetScriptTag' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/script_tags/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a single script tag',
            'data'             => ['root_key' => 'script_tag'],
            'parameters'       => [
                'id' => [
                    'description' => 'Script tag ID to retrieve',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateScriptTag' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/script_tags.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new script tags',
            'data'             => ['root_key' => 'script_tags'],
            'parameters'       => [
                'event' => [
                    'description' => 'Event value when the script tag is loaded',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                    'enum'        => ['onload'],
                ],
                'src' => [
                    'description' => 'URL of the script tag',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'display_scope' => [
                    'description' => 'Decide when the script tag should be loaded',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['online_store', 'order_status', 'all'],
                ]
            ]
        ],

        'UpdateScriptTag' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/script_tags/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing script tag',
            'data'             => ['root_key' => 'script_tag'],
            'parameters'       => [
                'id' => [
                    'description' => 'Script tag ID to update',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'event' => [
                    'description' => 'Event value when the script tag is loaded',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                    'enum'        => ['onload'],
                ],
                'src' => [
                    'description' => 'URL of the script tag',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'display_scope' => [
                    'description' => 'Decide when the script tag should be loaded',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['online_store', 'order_status', 'all'],
                ]
            ]
        ],

        'DeleteScriptTag' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/script_tags/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing script tag',
            'parameters'       => [
                'id' => [
                    'description' => 'Script tag ID to delete',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * TRANSACTION RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/transaction
         * --------------------------------------------------------------------------------
         */

        'GetTransactions' => [
            'httpMethod'    => 'GET',
            'uri'           => 'admin/orders/{order_id}/transactions.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Retrieve a list of transactions for a given order',
            'data'          => ['root_key' => 'transactions'],
            'parameters'    => [
                'order_id' => [
                    'description' => 'Order from which we need to extract transactions',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetTransaction' => [
            'httpMethod'    => 'GET',
            'uri'           => 'admin/orders/{order_id}/transactions/{id}.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Retrieve a specific transaction',
            'data'          => ['root_key' => 'transaction'],
            'parameters'    => [
                'order_id' => [
                    'description' => 'Order from which we need to extract transactions',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'id' => [
                    'description' => 'Transaction ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateTransaction' => [
            'httpMethod'    => 'POST',
            'uri'           => 'admin/orders/{order_id}/transactions.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Create a new transaction for a given order',
            'data'          => ['root_key' => 'transaction'],
            'parameters'    => [
                'order_id' => [
                    'description' => 'Order from which we need to extract transactions',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'amount' => [
                    'description' => 'The amount of money that the transaction was for',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'authorization' => [
                    'description' => 'The authorization code associated with the transaction',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'device_id' => [
                    'description' => 'The unique identifier for the device',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'gateway' => [
                    'description' => 'The name of the gateway the transaction was issued through',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'kind' => [
                    'description' => 'The kind of transaction',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                    'enum'        => ['authorization', 'capture', 'sale', 'void', 'refund'],
                ],
                'error_code' => [
                    'description' => 'A standardized error code, independent of the payment provider',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'status' => [
                    'description' => 'The status of the transaction',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => ['pending', 'failure', 'success', 'error']
                ],
                'test' => [
                    'description' => 'The option to use the transaction for testing purposes',
                    'location'    => 'json',
                    'type'        => 'boolean',
                    'required'    => false
                ],
                'currency' => [
                    'description' => 'The three letter code (ISO 4217) for the currency used for the payment',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * USAGE CHARGES RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/usagecharge
         * --------------------------------------------------------------------------------
         */

        'GetUsageCharges' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/recurring_application_charges/{recurring_charge_id}/usage_charges.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of usage charges for the given recurring application charges',
            'data'             => ['root_key' => 'usage_charges'],
            'parameters'       => [
                'recurring_charge_id' => [
                    'description' => 'Recurring charge from which we need to extract usage charges',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetUsageCharge' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/recurring_application_charges/{recurring_charge_id}/usage_charges/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a specific usage charge',
            'data'             => ['root_key' => 'usage_charge'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific usage charge ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'recurring_charge_id' => [
                    'description' => 'Recurring charge from which we need to extract usage charges',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateUsageCharge' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/recurring_application_charges/{recurring_charge_id}/usage_charges.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new usage charge',
            'data'             => ['root_key' => 'usage_charge'],
            'parameters'       => [
                'description' => [
                    'description' => 'Usage charge description',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'price' => [
                    'description' => 'Price to charge',
                    'location'    => 'json',
                    'type'        => 'number',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * WEBHOOK RELATED METHODS
         *
         * DOC: https://docs.shopify.com/api/webhook
         * --------------------------------------------------------------------------------
         */

        'GetWebhooks' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/webhooks.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a list of webhooks',
            'data'             => ['root_key' => 'webhooks'],
            'parameters'       => [
                'address' => [
                    'description' => 'Specific URL for the webhook',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_max' => [
                    'description' => 'Max creation date of the webhook',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'created_at_min' => [
                    'description' => 'Min creation date of the webhook',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_max' => [
                    'description' => 'Max update date of the webhook',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'updated_at_min' => [
                    'description' => 'Min update date of the webhook',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ],
                'topic' => [
                    'description' => 'List of webhook topic',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => [
                        'orders/create', 'orders/delete', 'orders/updated', 'orders/paid', 'orders/cancelled', 'orders/fulfilled', 'orders/partially_fulfilled',
                        'order_transactions/create', 'carts/create', 'carts/update', 'checkouts/create', 'checkouts/update', 'checkouts/delete', 'refunds/create',
                        'products/create', 'products/update', 'products/delete', 'collections/create', 'collections/update', 'collections/delete',
                        'customer_groups/create', 'customer_groups/update', 'customer_groups/delete', 'customers/create', 'customers/enable', 'customers/disable',
                        'customers/update', 'customers/delete', 'fulfillments/create', 'fulfillments/update', 'fulfillment_events/create', 'fulfillment_events/update',
                        'shop/update', 'disputes/create', 'disputes/update', 'themes/publish', 'app/uninstalled'
                    ]
                ],
                'limit' => [
                    'description' => 'A limit of results to fetch',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'max'         => 250,
                    'required'    => false
                ],
                'page' => [
                    'description' => 'Page to show',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'min'         => 1,
                    'required'    => false
                ],
                'since_id' => [
                    'description' => 'Restrict results after the specified id',
                    'location'    => 'query',
                    'type'        => 'integer',
                    'required'    => false
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'GetWebhook' => [
            'httpMethod'       => 'GET',
            'uri'              => 'admin/webhooks/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Retrieve a specific webhook',
            'data'             => ['root_key' => 'webhook'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific webhook ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'query',
                    'type'        => 'string',
                    'required'    => false
                ]
            ]
        ],

        'CreateWebhook' => [
            'httpMethod'       => 'POST',
            'uri'              => 'admin/webhooks.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Create a new webhook',
            'data'             => ['root_key' => 'webhook'],
            'parameters'       => [
                'format' => [
                    'description' => 'Type of data to return',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                    'enum'        => ['json', 'xml']
                ],
                'address' => [
                    'description' => 'Specific URL for the webhook',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true
                ],
                'topic' => [
                    'description' => 'List of webhook topic',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => true,
                    'enum'        => [
                        'orders/create', 'orders/delete', 'orders/updated', 'orders/paid', 'orders/cancelled', 'orders/fulfilled', 'orders/partially_fulfilled',
                        'order_transactions/create', 'carts/create', 'carts/update', 'checkouts/create', 'checkouts/update', 'checkouts/delete', 'refunds/create',
                        'products/create', 'products/update', 'products/delete', 'collections/create', 'collections/update', 'collections/delete',
                        'customer_groups/create', 'customer_groups/update', 'customer_groups/delete', 'customers/create', 'customers/enable', 'customers/disable',
                        'customers/update', 'customers/delete', 'fulfillments/create', 'fulfillments/update', 'fulfillment_events/create', 'fulfillment_events/update',
                        'shop/update', 'disputes/create', 'disputes/update', 'themes/publish', 'app/uninstalled'
                    ]
                ],
                'fields' => [
                    'description' => 'List of fields return by the webhooks',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ],
                'metafield_namespaces' => [
                    'description' => 'List of namespaces to return as part of the webhook',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'UpdateWebhook' => [
            'httpMethod'       => 'PUT',
            'uri'              => 'admin/webhooks/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Update an existing webhook',
            'data'             => ['root_key' => 'webhook'],
            'parameters'       => [
                'id' => [
                    'description' => 'Specific webhook ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ],
                'address' => [
                    'description' => 'Specific URL for the webhook',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'topic' => [
                    'description' => 'List of webhook topic',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false,
                    'enum'        => [
                        'orders/create', 'orders/delete', 'orders/updated', 'orders/paid', 'orders/cancelled', 'orders/fulfilled', 'orders/partially_fulfilled',
                        'order_transactions/create', 'carts/create', 'carts/update', 'checkouts/create', 'checkouts/update', 'checkouts/delete', 'refunds/create',
                        'products/create', 'products/update', 'products/delete', 'collections/create', 'collections/update', 'collections/delete',
                        'customer_groups/create', 'customer_groups/update', 'customer_groups/delete', 'customers/create', 'customers/enable', 'customers/disable',
                        'customers/update', 'customers/delete', 'fulfillments/create', 'fulfillments/update', 'fulfillment_events/create', 'fulfillment_events/update',
                        'shop/update', 'disputes/create', 'disputes/update', 'themes/publish', 'app/uninstalled'
                    ]
                ],
                'fields' => [
                    'description' => 'Comma separated list of fields to retrieve',
                    'location'    => 'json',
                    'type'        => 'string',
                    'required'    => false
                ],
                'metafield_namespaces' => [
                    'description' => 'List of namespaces to return as part of the webhook',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => false
                ]
            ]
        ],

        'DeleteWebhook' => [
            'httpMethod'       => 'DELETE',
            'uri'              => 'admin/webhooks/{id}.json',
            'responseModel'    => 'GenericModel',
            'summary'          => 'Delete an existing webhook',
            'parameters'       => [
                'id' => [
                    'description' => 'Specific webhook ID',
                    'location'    => 'uri',
                    'type'        => 'integer',
                    'required'    => true
                ]
            ]
        ],

        /**
         * --------------------------------------------------------------------------------
         * OTHERS
         * --------------------------------------------------------------------------------
         */

        'CreateDelegateAccessToken' => [
            'httpMethod'    => 'POST',
            'uri'           => 'admin/access_tokens/delegate.json',
            'responseModel' => 'GenericModel',
            'summary'       => 'Create a new delegate access token',
            'parameters'    => [
                'delegate_access_scope' => [
                    'description' => 'New scopes that are granted to the delegate access token',
                    'location'    => 'json',
                    'type'        => 'array',
                    'required'    => true,
                ],
                'expires_in' => [
                    'description' => 'Number of times in second before the token expires',
                    'location'    => 'json',
                    'type'        => 'integer',
                    'required'    => false
                ]
            ]
        ],
    ],
    'models' => [
        'GenericModel' => [
            'type'                 => 'object',
            'additionalProperties' => [
                'location' => 'json'
            ]
        ]
    ]
];
