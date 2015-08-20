<?php
class Pdoe
{
	private $pdoobj;
	private $pdostmt;
	
	function __construct() 
	{
		try
		{
    		//$this -> pdoobj  =  new pdo('mysql:host=rl22d1b12.db.6881697.hostedresource.com;dbname=rl22d1b12', 'rl22d1b12', 'Mi12s1!22', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
            $this -> pdoobj  =  new pdo('mysql:host=localhost;dbname=l2nsoft', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    		
		}
		catch(PDOException $ex)
		{
    		echo 'Connection failed: ' . $ex -> getMessage();
		}
	}
	
	
	
	
	/**************************************************************************/
	/* @parm    :  string
	/* @return  :  constant   
	/**************************************************************************/
	
	private function __pdo_const($type = '')
	{
		$const  =  array(
							  "bool" => PDO::PARAM_BOOL
						    , "null" => PDO::PARAM_NULL 
							, "int"  => PDO::PARAM_INT
							, "str"  => PDO::PARAM_STR
							, "lob"  => PDO::PARAM_LOB
							, "stmt" => PDO::PARAM_STMT
							, "inout" => PDO::PARAM_INPUT_OUTPUT
							, "lazy" => PDO::FETCH_LAZY
							, "assoc" => PDO::FETCH_ASSOC
							, "named" => PDO::FETCH_NAMED
							, "num" => PDO::FETCH_NUM
							, "both" => PDO::FETCH_BOTH
							, "obj" => PDO::FETCH_OBJ
							, "bound" => PDO::FETCH_BOUND
							, "column" => PDO::FETCH_COLUMN	
							, "class" => PDO::FETCH_CLASS
							, "into" => PDO::FETCH_INTO
							, "func" => PDO::FETCH_FUNC
							, "group" => PDO::FETCH_GROUP
							, "unique" => PDO::FETCH_UNIQUE
							, "key" => PDO::FETCH_KEY_PAIR
							, "classtype" => PDO::FETCH_CLASSTYPE
							, "serialize" => PDO::FETCH_SERIALIZE
							, "props" => PDO::FETCH_PROPS_LATE
							, "autocommit" => PDO::ATTR_AUTOCOMMIT
							, "prefetch" => PDO::ATTR_PREFETCH
							, "timeout" => PDO::ATTR_TIMEOUT
							, "errmode" => PDO::ATTR_ERRMODE
							, "serverver" => PDO::ATTR_SERVER_VERSION
							, "clientver" => PDO::ATTR_CLIENT_VERSION
							, "serverinfo" => PDO::ATTR_SERVER_INFO
							, "status" => PDO::ATTR_CONNECTION_STATUS
							, "case" => PDO::ATTR_CASE	
							, "cursorname" => PDO::ATTR_CURSOR_NAME
							, "cursor" => PDO::ATTR_CURSOR
							, "driver" => PDO::ATTR_DRIVER_NAME
							, "oracle" => PDO::ATTR_ORACLE_NULLS
							, "persostent" => PDO::ATTR_PERSISTENT
							, "stmtclass" => PDO::ATTR_STATEMENT_CLASS
							, "catalog" => PDO::ATTR_FETCH_CATALOG_NAMES
							, "table" => PDO::ATTR_FETCH_TABLE_NAMES
							, "stringify" => PDO::ATTR_STRINGIFY_FETCHES
							, "maxcollen" => PDO::ATTR_MAX_COLUMN_LEN
							, "default" => PDO::ATTR_DEFAULT_FETCH_MODE
							, "emulate" => PDO::ATTR_EMULATE_PREPARES
							, "silent" => PDO::ERRMODE_SILENT
							, "warning" => PDO::ERRMODE_WARNING
							, "exception" => PDO::ERRMODE_EXCEPTION
							, "natural" => PDO::CASE_NATURAL
							, "lower" => PDO::CASE_LOWER
							, "upper" => PDO::CASE_UPPER
							, "nullnat" => PDO::NULL_NATURAL
							, "emptystr" => PDO::NULL_EMPTY_STRING
							, "nulltostr" => PDO::NULL_TO_STRING
							, "orinext" => PDO::FETCH_ORI_NEXT
							, "oriprior" => PDO::FETCH_ORI_PRIOR
							, "orifirst" => PDO::FETCH_ORI_FIRST
							, "orilast" => PDO::FETCH_ORI_LAST
							, "oriabs" => PDO::FETCH_ORI_ABS
							, "orirel" => PDO::FETCH_ORI_REL
							, "fwdonly" => PDO::CURSOR_FWDONLY
							, "scroll" => PDO::CURSOR_SCROLL
							, "errnone" => PDO::ERR_NONE
							, "evtalloc" => PDO::PARAM_EVT_ALLOC
							, "evtfree" => PDO::PARAM_EVT_FREE
							, "evtexecpre" => PDO::PARAM_EVT_EXEC_PRE
							, "evtexecpost" => PDO::PARAM_EVT_EXEC_POST
							, "evtpre" => PDO::PARAM_EVT_FETCH_PRE
							, "evtpost" => PDO::PARAM_EVT_FETCH_POST
							, "evtnorm" => PDO::PARAM_EVT_NORMALIZE
						);
						
		if ($type == '' && empty($type))
		{
			return;	
		}
		else
		{
			return $const[$type];	
		}
    
	}
			
	/*************************************************************************************/
	/* @wanna execute query directly
	/* @parm   :  string
	/* @parm   :  array
	/* @return :  void
	/*************************************************************************************/
	
	public function pdo_exe($query = '', $values = array())
	{	
		if ($query != '' && ! empty($query))
		{

			$stmt  =  $this -> pdoobj -> prepare($query); 
			
			/************************************************************************/
			/* @like WHERE tbl1.col1 = :val1 AND tbl2.col2 = :val2 etc.
			/* @values = array('val1' => 4, 'val2' => 5, ....)
			/************************************************************************/
			
			if (is_array($values) && ! empty($values))
			{			
				$stmt -> execute($values);	
			}
			else
			{
				$stmt -> execute();
			}
			
			$this -> pdostmt  =  $stmt;
		}	
	}
	

	/*************************************************************************************/
	/* @wanna last insert id
	/* @return :  int
	/*************************************************************************************/
	
	public function pdo_lastinsertid()
	{
		return $this -> pdoobj -> lastInsertId();
	}
	

	/*************************************************************************************/
	/* @wanna row count
	/* @return :  int
	/* @number of affected rows : INSERT, UPDATE, DELETE 
	/*************************************************************************************/
	
	public function pdo_rowcount()
	{
		return $this -> pdostmt -> rowCount();
	}
	

	/*************************************************************************************/
	/* @wanna select result fetch
	/* @parm   :  string
	/* @parm   :  string  
	/* @return :  array
	/*************************************************************************************/
	
	public function pdo_fetch($type = "", $count = FALSE)
	{
		$result  =  $this -> pdostmt -> fetch($this -> __pdo_const($type));
		
		/**************************************************************************/
		/* @count return number of row fetch
		/**************************************************************************/
		
		return ($count) ? array("count" => (! empty($result) ? 1 : 0), "result" => $result) : $result;
	}
	

	/*************************************************************************************/
	/* @wanna select result fetch all
	/* @parm   :  string 
	/* @return :  array
	/*************************************************************************************/
	
	public function pdo_fetchall($type = "", $count = FALSE)
	{
		$result  =  $this -> pdostmt -> fetchAll($this -> __pdo_const($type));
		
		/**************************************************************************/
		/* @count return number of row fetch
		/**************************************************************************/
		
		return ($count) ? array("count" => count($result), "result" => $result) : $result;
	}
	

	/*************************************************************************************/
	/* @wanna select result fetch column
	/* @parm   :  string 
	/* @return :  array
	/*************************************************************************************/
	
	public function pdo_fetchcolumn($type = "", $count = FALSE)
	{
		$result  =  $this -> pdostmt -> fetchColumn($this -> __pdo_const($type));
		
		/**************************************************************************/
		/* @count return number of row fetch
		/**************************************************************************/
		
		return ($count) ? array("count" => (! empty($result) ? 1 : 0), "result" => $result) : $result;
	}
	

	/*************************************************************************************/
	/* @wanna select result column count 
	/* @return :  int
	/*************************************************************************************/
	
	public function pdo_columncount()
	{
		return $this -> pdostmt -> columnCount();
	}
	

	/*************************************************************************************/
	/* @generate error information 
	/* @return :  array
	/*************************************************************************************/
	
	public function pdo_error()
	{
		return $this -> pdostmt -> errorInfo();
	}	
	

	/*************************************************************************************/
	/* @wanna get pdo statement object 
	/* @return :  int
	/*************************************************************************************/
	
	public function pdo_stmt_obj()
	{
		return $this -> pdostmt;
	}
	
	
	public function pdo_close()
	{
		$this -> pdoobj  =  NULL;	
	}
			
}

