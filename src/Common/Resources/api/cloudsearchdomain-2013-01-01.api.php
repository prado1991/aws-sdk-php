<?php
return [
  'metadata' =>
  [
    'apiVersion' => '2013-01-01',
    'endpointPrefix' => 'cloudsearchdomain',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'Amazon CloudSearch Domain',
    'signatureVersion' => 'v4',
    'signingName' => 'cloudsearch',
    'protocol' => 'rest-json',
  ],
  'operations' =>
  [
    'Search' =>
    [
      'name' => 'Search',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/2013-01-01/search?format=sdk&pretty=true',
      ],
      'input' =>
      [
        'shape' => 'SearchRequest',
      ],
      'output' =>
      [
        'shape' => 'SearchResponse',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'SearchException',
          'exception' => true,
        ],
      ],
    ],
    'Suggest' =>
    [
      'name' => 'Suggest',
      'http' =>
      [
        'method' => 'GET',
        'requestUri' => '/2013-01-01/suggest?format=sdk&pretty=true',
      ],
      'input' =>
      [
        'shape' => 'SuggestRequest',
      ],
      'output' =>
      [
        'shape' => 'SuggestResponse',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'SearchException',
          'exception' => true,
        ],
      ],
    ],
    'UploadDocuments' =>
    [
      'name' => 'UploadDocuments',
      'http' =>
      [
        'method' => 'POST',
        'requestUri' => '/2013-01-01/documents/batch?format=sdk',
      ],
      'input' =>
      [
        'shape' => 'UploadDocumentsRequest',
      ],
      'output' =>
      [
        'shape' => 'UploadDocumentsResponse',
      ],
      'errors' =>
      [
        0 =>
        [
          'shape' => 'DocumentServiceException',
          'exception' => true,
        ],
      ],
    ],
  ],
  'shapes' =>
  [
    'Adds' =>
    [
      'type' => 'long',
    ],
    'Blob' =>
    [
      'type' => 'blob',
      'streaming' => true,
    ],
    'Bucket' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'value' =>
        [
          'shape' => 'String',
        ],
        'count' =>
        [
          'shape' => 'Long',
        ],
      ],
    ],
    'BucketInfo' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'buckets' =>
        [
          'shape' => 'BucketList',
        ],
      ],
    ],
    'BucketList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Bucket',
      ],
    ],
    'ContentType' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'application/json',
        1 => 'application/xml',
      ],
    ],
    'Cursor' =>
    [
      'type' => 'string',
    ],
    'Deletes' =>
    [
      'type' => 'long',
    ],
    'DocumentServiceException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'status' =>
        [
          'shape' => 'String',
        ],
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'exception' => true,
    ],
    'DocumentServiceWarning' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
    ],
    'DocumentServiceWarnings' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'DocumentServiceWarning',
      ],
    ],
    'Expr' =>
    [
      'type' => 'string',
    ],
    'Facet' =>
    [
      'type' => 'string',
    ],
    'Facets' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'String',
      ],
      'value' =>
      [
        'shape' => 'BucketInfo',
      ],
    ],
    'FieldValue' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'String',
      ],
    ],
    'Fields' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'String',
      ],
      'value' =>
      [
        'shape' => 'FieldValue',
      ],
    ],
    'FilterQuery' =>
    [
      'type' => 'string',
    ],
    'Highlight' =>
    [
      'type' => 'string',
    ],
    'Highlights' =>
    [
      'type' => 'map',
      'key' =>
      [
        'shape' => 'String',
      ],
      'value' =>
      [
        'shape' => 'String',
      ],
    ],
    'Hit' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'id' =>
        [
          'shape' => 'String',
        ],
        'fields' =>
        [
          'shape' => 'Fields',
        ],
        'highlights' =>
        [
          'shape' => 'Highlights',
        ],
      ],
    ],
    'HitList' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'Hit',
      ],
    ],
    'Hits' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'found' =>
        [
          'shape' => 'Long',
        ],
        'start' =>
        [
          'shape' => 'Long',
        ],
        'cursor' =>
        [
          'shape' => 'String',
        ],
        'hit' =>
        [
          'shape' => 'HitList',
        ],
      ],
    ],
    'Long' =>
    [
      'type' => 'long',
    ],
    'Partial' =>
    [
      'type' => 'boolean',
    ],
    'Query' =>
    [
      'type' => 'string',
    ],
    'QueryOptions' =>
    [
      'type' => 'string',
    ],
    'QueryParser' =>
    [
      'type' => 'string',
      'enum' =>
      [
        0 => 'simple',
        1 => 'structured',
        2 => 'lucene',
        3 => 'dismax',
      ],
    ],
    'Return' =>
    [
      'type' => 'string',
    ],
    'SearchException' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'message' =>
        [
          'shape' => 'String',
        ],
      ],
      'exception' => true,
    ],
    'SearchRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'query',
      ],
      'members' =>
      [
        'cursor' =>
        [
          'shape' => 'Cursor',
          'location' => 'querystring',
          'locationName' => 'cursor',
        ],
        'expr' =>
        [
          'shape' => 'Expr',
          'location' => 'querystring',
          'locationName' => 'expr',
        ],
        'facet' =>
        [
          'shape' => 'Facet',
          'location' => 'querystring',
          'locationName' => 'facet',
        ],
        'filterQuery' =>
        [
          'shape' => 'FilterQuery',
          'location' => 'querystring',
          'locationName' => 'fq',
        ],
        'highlight' =>
        [
          'shape' => 'Highlight',
          'location' => 'querystring',
          'locationName' => 'highlight',
        ],
        'partial' =>
        [
          'shape' => 'Partial',
          'location' => 'querystring',
          'locationName' => 'partial',
        ],
        'query' =>
        [
          'shape' => 'Query',
          'location' => 'querystring',
          'locationName' => 'q',
        ],
        'queryOptions' =>
        [
          'shape' => 'QueryOptions',
          'location' => 'querystring',
          'locationName' => 'q.options',
        ],
        'queryParser' =>
        [
          'shape' => 'QueryParser',
          'location' => 'querystring',
          'locationName' => 'q.parser',
        ],
        'return' =>
        [
          'shape' => 'Return',
          'location' => 'querystring',
          'locationName' => 'return',
        ],
        'size' =>
        [
          'shape' => 'Size',
          'location' => 'querystring',
          'locationName' => 'size',
        ],
        'sort' =>
        [
          'shape' => 'Sort',
          'location' => 'querystring',
          'locationName' => 'sort',
        ],
        'start' =>
        [
          'shape' => 'Start',
          'location' => 'querystring',
          'locationName' => 'start',
        ],
      ],
    ],
    'SearchResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'status' =>
        [
          'shape' => 'SearchStatus',
        ],
        'hits' =>
        [
          'shape' => 'Hits',
        ],
        'facets' =>
        [
          'shape' => 'Facets',
        ],
      ],
    ],
    'SearchStatus' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'timems' =>
        [
          'shape' => 'Long',
        ],
        'rid' =>
        [
          'shape' => 'String',
        ],
      ],
    ],
    'Size' =>
    [
      'type' => 'long',
    ],
    'Sort' =>
    [
      'type' => 'string',
    ],
    'Start' =>
    [
      'type' => 'long',
    ],
    'String' =>
    [
      'type' => 'string',
    ],
    'SuggestModel' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'query' =>
        [
          'shape' => 'String',
        ],
        'found' =>
        [
          'shape' => 'Long',
        ],
        'suggestions' =>
        [
          'shape' => 'Suggestions',
        ],
      ],
    ],
    'SuggestRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'query',
        1 => 'suggester',
      ],
      'members' =>
      [
        'query' =>
        [
          'shape' => 'Query',
          'location' => 'querystring',
          'locationName' => 'q',
        ],
        'suggester' =>
        [
          'shape' => 'Suggester',
          'location' => 'querystring',
          'locationName' => 'suggester',
        ],
        'size' =>
        [
          'shape' => 'SuggestionsSize',
          'location' => 'querystring',
          'locationName' => 'size',
        ],
      ],
    ],
    'SuggestResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'status' =>
        [
          'shape' => 'SuggestStatus',
        ],
        'suggest' =>
        [
          'shape' => 'SuggestModel',
        ],
      ],
    ],
    'SuggestStatus' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'timems' =>
        [
          'shape' => 'Long',
        ],
        'rid' =>
        [
          'shape' => 'String',
        ],
      ],
    ],
    'Suggester' =>
    [
      'type' => 'string',
    ],
    'SuggestionMatch' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'suggestion' =>
        [
          'shape' => 'String',
        ],
        'score' =>
        [
          'shape' => 'Long',
        ],
        'id' =>
        [
          'shape' => 'String',
        ],
      ],
    ],
    'Suggestions' =>
    [
      'type' => 'list',
      'member' =>
      [
        'shape' => 'SuggestionMatch',
      ],
    ],
    'SuggestionsSize' =>
    [
      'type' => 'long',
    ],
    'UploadDocumentsRequest' =>
    [
      'type' => 'structure',
      'required' =>
      [
        0 => 'documents',
        1 => 'contentType',
      ],
      'members' =>
      [
        'documents' =>
        [
          'shape' => 'Blob',
        ],
        'contentType' =>
        [
          'shape' => 'ContentType',
          'location' => 'header',
          'locationName' => 'Content-Type',
        ],
      ],
      'payload' => 'documents',
    ],
    'UploadDocumentsResponse' =>
    [
      'type' => 'structure',
      'members' =>
      [
        'status' =>
        [
          'shape' => 'String',
        ],
        'adds' =>
        [
          'shape' => 'Adds',
        ],
        'deletes' =>
        [
          'shape' => 'Deletes',
        ],
        'warnings' =>
        [
          'shape' => 'DocumentServiceWarnings',
        ],
      ],
    ],
  ],
];