<?php

class allarticles extends Conectar
{

	private $blogs;
	private $blogi;

    public function __construct()
    {

		$this->blogs=array();
		$this->blogi=array();
    }

    public function __destruct()
    {

		$this->blogs=array();
		$this->blogi=array();
    }


	########################################################################## BLOGS

	//Obtener todo de la tabla blogs
    public function get_blog_articles()
    {
        unset($this->blogs);

        parent::con();

        $sql="select * from blogs";

        $res=mysql_query($sql);
        
        while ($reg=mysql_fetch_assoc($res))
        {
            $this->blogs[]=$reg;
        }
            return $this->blogs;  

        mysql_free_result($reg);      
    }
	
	//Obtener una reservacion por su id
    public function get_blogs_by_id($id)
    {        
        parent::con();

        $sql=sprintf("select * from blogs as b where b.id_blogs = %s;",parent::comillas_inteligentes($id));

        $res=mysql_query($sql);
        while ($reg=mysql_fetch_assoc($res))
        {
            $this->blogi[]=$reg;
        }
            return $this->blogi;
        
        mysql_free_result($reg);
            
    }
	
	//Agregar un articulo
    public function add_article()
    {
        parent::con();
        
            $query=sprintf("insert into blogs values (null, %s, %s, %s, %s, %s, %s);", 
            parent::comillas_inteligentes( $_POST["article_title"]),
            parent::comillas_inteligentes( $_POST["article_date"]),
            parent::comillas_inteligentes( $_POST["article_description"]),
            parent::comillas_inteligentes( $_POST["article_seo"]),
            parent::comillas_inteligentes( $_POST["article_picture"]),
            parent::comillas_inteligentes( $_POST["article_author"]) );
            mysql_query($query);

            echo "<script type='text/javascript'>
                alert('El Articulo fué Creado con éxito');
                window.location='_blog.php';
            </script>";
    }
	
	//Editar un Articulo
    public function edit_article()
    {    
        parent::con();
    
        $query=sprintf("update blogs set 
        article_title = %s,
        article_date = %s,
        article_description = %s,
        article_seo = %s,
        article_picture = %s,
        article_author = %s
        where id_blogs = %s;",
        parent::comillas_inteligentes( $_POST["article_title"]),
		parent::comillas_inteligentes( $_POST["article_date"]),
		parent::comillas_inteligentes( $_POST["article_description"]),
		parent::comillas_inteligentes( $_POST["article_seo"]),
		parent::comillas_inteligentes( $_POST["article_picture"]),
		parent::comillas_inteligentes( $_POST["article_author"]),
        parent::comillas_inteligentes( $_POST['id_blogs']) );
        
        mysql_query($query);

        echo "<script type='text/javascript'>
            alert('El Articulo fué Editado con éxito');
            window.location='_blog.php';
        </script>";
    }
}
?>