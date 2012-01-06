php mysql tree
===========
##Create trees from Database results.
[phunkei.de](http://www.phunkei.de/)

**WHAT**

It can be very difficult to create tree-like structures from database results, at least with a flexible depth.
The most elegant way for storing these structures in a traditional database, is the Adjacency List Model. In this approach
you do not have to store the hole path within each row, but just the id of the root node.
These classes provide a way to create trees from those rows.


Data:
<pre>
+----+------+-----------+
| id | name | id_parent |
+----+------+-----------+
| 1  | A    | 0         |
+----+------+-----------+
| 2  | B    | 1         |
+----+------+-----------+
| 3  | C    | 1         |
+----+------+-----------+
| 4  | D    | 3         |
+----+------+-----------+
| 5  | E    | 3         |
+----+------+-----------+
</pre>

Result:
<pre>
A
|_B
|_C
  |_D
  |_E
</pre>

**REQUIREMENTS**

*	PHP5
*	An array with data.

**EXAMPLE**

```
require_once("node.php");
require_once("tree.php");

// You can use database rows instead, this is just an example.
$data = array();
$data[] = array("id" => 1, "name" => "A", "id_parent" => 0);
$data[] = array("id" => 2, "name" => "B", "id_parent" => 1);
$data[] = array("id" => 3, "name" => "C", "id_parent" => 1);
$data[] = array("id" => 4, "name" => "D", "id_parent" => 3);
$data[] = array("id" => 5, "name" => "E", "id_parent" => 3);

$tree = new tree($data);
$output = $tree->getTree();
```