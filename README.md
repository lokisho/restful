Example of [RESTful](https://www.drupal.org/project/restful) Module Implementation
=================================================================================

This develops an example of [RESTful](https://www.drupal.org/project/restful) module implementation
 
 There are different branches following the steps that are going to be developed
 Database is in scripts/db.sql
 
 ![image](https://cloud.githubusercontent.com/assets/5515159/18169251/7282f808-7016-11e6-9519-2afd5afadaea.png)
 
# Examples of [json_api](http://jsonapi.org) requests

##Including of Related Resources
http://jsonapi.org/format/#fetching-includes

###Examples
* **Fetching one level entites**
/atlas/labels?include=artists,bands
* **Fetching two level entities**
/atlas/labels?include=artists,bands,bands.members

##Sparse Fieldsets
http://jsonapi.org/format/#fetching-sparse-fieldsets

###Examples
* /atlas/labels?fields=name,artists.commonName,bands.name&include=artists,bands

##FILTERS

###Examples
* **Filtering by id**
/atlas/labels/6
* **Simple Filter**
/atlas/labels?filter[name]=Adeline%20Records
* **Nested Resources**
/atlas/labels?include=artists&filter[artists.commonName][value]=Jason%20White
* **Between Operator**
/atlas/albums&filter[year][value][]=1994&filter[year][value][]=2000&filter[year][operator]=BETWEEN
* **Different Operator**
/atlas/labels?filter[name][value]=Paratus%20Paulatim&filter[name][operator]=<>
* **Getting Available Operator**
/atlas/labels?include=artists&filter[artists.commonName][value]=Jason%20White&filter[artists.commonName][operator]

##Sorting
http://jsonapi.org/format/#fetching-sorting

###Examples
* **Ascending sorting**
atlas/labels?sort=name
* **Descending sorting**
/atlas/labels?sort=-name -- DESC

##Pagination
http://jsonapi.org/format/#fetching-pagination

###Examples
/atlas/people?page[size]=10 --default = 50

#Acknowledgements

This example is developed based on the [video tutorials](https://www.youtube.com/playlist?list=PLZOQ_ZMpYrZv8_c7jd_CkO_93-DnyVFY5) by [Mateu Aguilo](https://www.drupal.org/project/restful) who is the maintainer of [RESTful](https://www.drupal.org/project/restful) module