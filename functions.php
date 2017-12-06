<?php 
include('connect.config.php');

*#----- SQL Query to get user credential ------------------------
	*#---

	*#---
*#---------------------------------------------------------------


*#----- SQL Query for Business Type Maintenance ------------------------
	*#---
	FUNCTION getBusType
  xQx = "SELECT a.busTypeName,a.busTypeId as Id "
  xQx = xQx + "FROM hmhs_cid.businesstypes a "
  xQx = xQx + "WHERE a.busTypeId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.busTypeName "
  
    IF SQLEXEC(conhandle,xQx,"csr_busType") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addBusType(privStat)
  xQx = "INSERT INTO hmhs_cid.businesstypes("
  xQx = xQx + "busTypeName) "
  xQx = xQx + "VALUES(?privStat) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updBusType(privId,privStat)
  xQx = "UPDATE hmhs_cid.businesstypes "
  xQx = xQx + "SET busTypeName=?privStat "
  xQx = xQx + "WHERE busTypeId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_BusType(privId)
  xQx = "SELECT a.busTypeName,a.busTypeId as Id "
  xQx = xQx + "FROM hmhs_cid.businesstypes a "
  xQx = xQx + "WHERE a.busTypeId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editbusType") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delBusType(privId)
  xQx = "DELETE FROM hmhs_cid.businesstypes WHERE busTypeId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Accountability Status Maintenance ------------------------
*#---
FUNCTION getAccStat
  xQx = "SELECT a.acctStatus,a.acctStatId as Id "
  xQx = xQx + "FROM hmhs_cid.accountabilitystatus a "
  xQx = xQx + "WHERE a.acctStatId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.acctStatus "
  
    IF SQLEXEC(conhandle,xQx,"csr_acctStatus") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAccStat(privStat)
  xQx = "INSERT INTO hmhs_cid.accountabilitystatus("
  xQx = xQx + "acctStatus) "
  xQx = xQx + "VALUES(?privStat) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAccStat(privId,privStat)
  xQx = "UPDATE hmhs_cid.accountabilitystatus "
  xQx = xQx + "SET acctStatus=?privStat "
  xQx = xQx + "WHERE acctStatId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_AccStat(privId)
  xQx = "SELECT a.acctStatus,a.acctStatId as Id "
  xQx = xQx + "FROM hmhs_cid.accountabilitystatus a "
  xQx = xQx + "WHERE a.acctStatId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editacctStatus") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAccStat(privId)
  xQx = "UPDATE hmhs_cid.accountabilitystatus "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE acctStatId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Acquire Type Maintenance ------------------------
*#---
FUNCTION getAcqType
  xQx = "SELECT a.acqTypeName,a.acqTypeId as Id "
  xQx = xQx + "FROM hmhs_cid.acquiretypes a "
  xQx = xQx + "WHERE a.acqTypeId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.acqTypeName "
  
    IF SQLEXEC(conhandle,xQx,"csr_acqType") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAcqType(privStat)
  xQx = "INSERT INTO hmhs_cid.acquiretypes("
  xQx = xQx + "acqTypeName) "
  xQx = xQx + "VALUES(?privStat) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAcqType(privId,privStat)
  xQx = "UPDATE hmhs_cid.acquiretypes "
  xQx = xQx + "SET acqTypeName=?privStat "
  xQx = xQx + "WHERE acqTypeId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_AcqType(privId)
  xQx = "SELECT a.acqTypeName,a.acqTypeId as Id "
  xQx = xQx + "FROM hmhs_cid.acquiretypes a "
  xQx = xQx + "WHERE a.acqTypeId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editAcqType") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAcqType(privId)
  xQx = "UPDATE hmhs_cid.acquiretypes "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE acqTypeId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Category Maintenance ------------------------
*#---
FUNCTION getCat
  xQx = "SELECT a.categoryName,a.catId as Id "
  xQx = xQx + "FROM hmhs_cid.categories a "
  xQx = xQx + "WHERE a.catId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.categoryName "
  
    IF SQLEXEC(conhandle,xQx,"csr_cat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addCat(privStat)
  xQx = "INSERT INTO hmhs_cid.categories("
  xQx = xQx + "categoryName) "
  xQx = xQx + "VALUES(?privStat) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updCat(privId,privStat)
  xQx = "UPDATE hmhs_cid.categories "
  xQx = xQx + "SET categoryName=?privStat "
  xQx = xQx + "WHERE catId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

  FUNCTION getEdit_Cat(privId)
  xQx = "SELECT a.categoryName,a.catId as Id "
  xQx = xQx + "FROM hmhs_cid.categories a "
  xQx = xQx + "WHERE a.catId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editCat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delCat(privId)
  xQx = "DELETE FROM hmhs_cid.categories WHERE catId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Item Type Maintenance ------------------------
*#---
FUNCTION getItmType
  xQx = "SELECT a.itmTypeName,a.itmTypeId as Id "
  xQx = xQx + "FROM hmhs_cid.itemtypes a "
  xQx = xQx + "WHERE a.itmTypeId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.itmTypeName "
  
    IF SQLEXEC(conhandle,xQx,"csr_itmType") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addItmType(privStat)
  xQx = "INSERT INTO hmhs_cid.itemtypes("
  xQx = xQx + "itmTypeName) "
  xQx = xQx + "VALUES(?privStat) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updItmType(privId,privStat)
  xQx = "UPDATE hmhs_cid.itemtypes "
  xQx = xQx + "SET itmTypeName=?privStat "
  xQx = xQx + "WHERE itmTypeId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

  FUNCTION getEdit_ItmType(privId)
  xQx = "SELECT a.itmTypeName,a.itmTypeId as Id "
  xQx = xQx + "FROM hmhs_cid.itemtypes a "
  xQx = xQx + "WHERE a.itmTypeId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editItmType") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delItmType(privId)
  xQx = "UPDATE hmhs_cid.itemtypes "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE itmTypeId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Status Maintenance ------------------------
*#---
FUNCTION getStat
  xQx = "SELECT a.status,a.statId as Id "
  xQx = xQx + "FROM hmhs_cid.status a "
  xQx = xQx + "WHERE a.statId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.status "
  
    IF SQLEXEC(conhandle,xQx,"csr_stat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addStat(privStat)
  xQx = "INSERT INTO hmhs_cid.status("
  xQx = xQx + "status) "
  xQx = xQx + "VALUES(?privStat) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updStat(privId,privStat)
  xQx = "UPDATE hmhs_cid.status "
  xQx = xQx + "SET status=?privStat "
  xQx = xQx + "WHERE statId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_Stat(privId)
  xQx = "SELECT a.status,a.statId as Id "
  xQx = xQx + "FROM hmhs_cid.status a "
  xQx = xQx + "WHERE a.statId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editStat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delStat(privId)
  xQx = "UPDATE hmhs_cid.status "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE statId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Supplier Maintenance ------------------------
*#---
FUNCTION getSupplier
  xQx = "SELECT a.supName,a.contactPerson,a.telno,a.faxno, "
  xQx = xQx + "a.email,a.typeOfSup,a.supId as Id "
  xQx = xQx + "FROM hmhs_cid.suppliers a "
  xQx = xQx + "WHERE a.supId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.supName "
  
    IF SQLEXEC(conhandle,xQx,"csr_suppliers") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getSupplier_Filter(vFilter,vValue)
  xQx = "CALL hmhs_cid.filter_suppliers(?vFilter,?vValue) "
  
    IF SQLEXEC(conhandle,xQx,"csr_suppliers") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addSupplier()
  xQx = "INSERT INTO hmhs_cid.suppliers("
  xQx = xQx + "supName, "
  xQx = xQx + "busTypeId, "
  xQx = xQx + "contactPerson, "
  xQx = xQx + "address, "
  xQx = xQx + "telno, "
  xQx = xQx + "faxno, "
  xQx = xQx + "email, "
  xQx = xQx + "approved_by, "
  xQx = xQx + "date_approved, "
  xQx = xQx + "remarks, "
  xQx = xQx + "typeOfSup, "
  xQx = xQx + "isActive) "
  
  xQx = xQx + "VALUES(?vAdd_Supplier, "
  xQx = xQx + "?vAdd_BusType, "
  xQx = xQx + "?vAdd_Contact, "
  xQx = xQx + "?vAdd_Address, "
  xQx = xQx + "?vAdd_Tel, "
  xQx = xQx + "?vAdd_Fax, "
  xQx = xQx + "?vAdd_Mail, "
  xQx = xQx + "?vAdd_Approved, "
  xQx = xQx + "?vAdd_DateApproved, "
  xQx = xQx + "?vAdd_Remarks, "
  xQx = xQx + "?vAdd_Type, "
  xQx = xQx + "?vAdd_Active) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updSupplier(privId)
  xQx = "UPDATE hmhs_cid.suppliers "
  xQx = xQx + "SET supName=?vAdd_Supplier, "
  xQx = xQx + "busTypeId=?vAdd_BusType, "
  xQx = xQx + "contactPerson=?vAdd_Contact, "
  xQx = xQx + "address=?vAdd_Address, "
  xQx = xQx + "telno=?vAdd_Tel, "
  xQx = xQx + "faxno=?vAdd_Fax, "
  xQx = xQx + "email=?vAdd_Mail, "
  xQx = xQx + "approved_by=?vAdd_Approved, "
  xQx = xQx + "date_approved=?vAdd_DateApproved, "
  xQx = xQx + "remarks=?vAdd_Remarks, "
  xQx = xQx + "typeOfSup=?vAdd_Type, "
  xQx = xQx + "isActive=?vAdd_Active "
  xQx = xQx + "WHERE supId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_Supplier(privId)
  xQx = "SELECT a.supName,a.contactPerson,a.telno,a.faxno,a.address, "
  xQx = xQx + "a.email,a.typeOfSup,a.remarks,a.isActive,a.busTypeId, "
  xQx = xQx + "a.approved_by,a.date_approved,a.supId as Id "
  xQx = xQx + "FROM hmhs_cid.suppliers a "
  xQx = xQx + "WHERE a.supId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editSuppliers") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delSupplier(privId)
  xQx = "UPDATE hmhs_cid.suppliers "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE supId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getSup_BusType(privId)
  xQx = "SELECT a.busTypeName "
  xQx = xQx + "FROM hmhs_cid.businesstypes a "
  xQx = xQx + "WHERE busTypeId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_sup_busType") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getSup_EmpList(privId)
  xQx = "SELECT a.fullname FROM hmhs_hrd.employees a "
  xQx = xQx + "WHERE empId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_sup_EmpList") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------

*#----- SQL Query for Client Maintenance ------------------------
*#---
FUNCTION getClient
  xQx = "SELECT a.clientName,a.contactPerson,a.telno,mobileno,a.faxno, "
  xQx = xQx + "a.email,a.clientId AS Id "
  xQx = xQx + "FROM hmhs_cid.clients a "
  xQx = xQx + "WHERE a.clientId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.clientName "
  
    IF SQLEXEC(conhandle,xQx,"csr_clients") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getClient_Filter(vFilter,vValue)
  xQx = "CALL hmhs_cid.filter_clients(?vFilter,?vValue) "
  
    IF SQLEXEC(conhandle,xQx,"csr_clients") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addClient()
  xQx = "INSERT INTO hmhs_cid.clients("
  xQx = xQx + "clientName, "
  xQx = xQx + "busTypeId, "
  xQx = xQx + "contactPerson, "
  xQx = xQx + "address, "
  xQx = xQx + "telno, "
  xQx = xQx + "faxno, "
  xQx = xQx + "mobileno, "
  xQx = xQx + "email, "
  xQx = xQx + "dateCreated, "
  xQx = xQx + "remarks, "
  xQx = xQx + "tin, "
  xQx = xQx + "osca_pwd_no, "
  xQx = xQx + "sc_tin_no, "
  xQx = xQx + "tax_status, "
  xQx = xQx + "isActive) "
  
  xQx = xQx + "VALUES(?vAdd_Client, "
  xQx = xQx + "?vAdd_BusType, "
  xQx = xQx + "?vAdd_Contact, "
  xQx = xQx + "?vAdd_Address, "
  xQx = xQx + "?vAdd_Tel, "
  xQx = xQx + "?vAdd_Fax, "
  xQx = xQx + "?vAdd_Mobile, "
  xQx = xQx + "?vAdd_Mail, "
  xQx = xQx + "?vAdd_DateApproved, "
  xQx = xQx + "?vAdd_Remarks, "
  xQx = xQx + "?vAdd_tin, "
  xQx = xQx + "?vAdd_osca_pwd_no, "
  xQx = xQx + "?vAdd_sc_tin_no, "
  xQx = xQx + "?vAdd_taxstatus, "
  xQx = xQx + "?vAdd_Active) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updClient(privId)
  xQx = "UPDATE hmhs_cid.clients "
  xQx = xQx + "SET clientName=?vAdd_Client, "
  xQx = xQx + "busTypeId=?vAdd_BusType, "
  xQx = xQx + "contactPerson=?vAdd_Contact, "
  xQx = xQx + "address=?vAdd_Address, "
  xQx = xQx + "telno=?vAdd_Tel, "
  xQx = xQx + "faxno=?vAdd_Fax, "
  xQx = xQx + "mobileno=?vAdd_Mobile, "
  xQx = xQx + "email=?vAdd_Mail, "
  xQx = xQx + "dateCreated=?vAdd_DateApproved, "
  xQx = xQx + "remarks=?vAdd_Remarks, "
  xQx = xQx + "tin=?vAdd_tin, "
  xQx = xQx + "osca_pwd_no=?vAdd_osca_pwd_no, "
  xQx = xQx + "sc_tin_no=?vAdd_sc_tin_no, "
  xQx = xQx + "tax_status=?vAdd_taxstatus, "
  xQx = xQx + "isActive=?vAdd_Active "
  xQx = xQx + "WHERE clientId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_Client(privId)
  xQx = "SELECT a.clientName,a.contactPerson,a.telno,a.faxno,a.mobileno,a.address, "
  xQx = xQx + "a.email,a.remarks,a.isActive,a.busTypeId, "
  xQx = xQx + "a.dateCreated,a.clientId as Id,a.tin,a.osca_pwd_no,a.sc_tin_no,a.tax_status "
  xQx = xQx + "FROM hmhs_cid.clients a "
  xQx = xQx + "WHERE a.clientId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editClients") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delClient(privId)
  xQx = "UPDATE hmhs_cid.clients "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE clientId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------


*#----- SQL Query for Assets Maintenance ------------------------
*#---
FUNCTION getAsset(vYear,vAll)
  xQx = "SELECT z.code,z.groupName,z.status,z.unitPrice,z.sellPrice,z.supName,z.description,CAST(z.statId AS SIGNED) AS statId,z.isAccount,CAST(z.Id AS SIGNED) AS Id,CAST(z.catId AS SIGNED) AS catId,z.assetName,CAST(z.invItmId AS SIGNED) AS invItmId "
  xQx = xQx + "FROM (						"
  xQx = xQx + "SELECT a.code,d.groupName,b.status,a.unitPrice,a.sellPrice,c.supName,a.description,a.statId,a.isAccount,a.assetId AS Id,a.catId,a.assetName,0 AS invItmId "
  xQx = xQx + "FROM hmhs_cid.assets a						"
  xQx = xQx + "  JOIN hmhs_cid.status b					"
  xQx = xQx + "    ON (a.statId = b.statId)				"
  xQx = xQx + "  JOIN hmhs_cid.suppliers c				"
  xQx = xQx + "    ON (a.supId = c.supId)					"
  xQx = xQx + "  JOIN hmhs_cid.assetgroup d				"
  xQx = xQx + "    ON (d.assetGroupId=a.catId)			"	
  xQx = xQx + "WHERE a.isDeleted = 0						"
  
  IF vAll = 0 THEN 
    xQx = xQx + "    AND YEAR(a.delivery_date) = ?vYear		"
  ENDIF
  
  xQx = xQx + "UNION						"
  xQx = xQx + "SELECT '---' AS CODE,b.groupName,IF(a.status=0,'Preparation','Sold') AS STATUS ,a.unitPrice,a.amount AS sellPrice,c.supName,'' AS description,1 AS statId,0 AS isAccount,0 AS Id,a.assetGroupId AS catId,'' AS assetName,a.invItmId		"
  xQx = xQx + "FROM hmhs_cid.invoiceitems a						"
  xQx = xQx + "JOIN hmhs_cid.assetgroup b					"
  xQx = xQx + "ON (a.assetGroupId=b.assetGroupId)						"
  xQx = xQx + "JOIN hmhs_cid.suppliers c						"
  xQx = xQx + "ON (a.supId=c.supId)						"
  xQx = xQx + "WHERE a.assetId = 0						"		
  xQx = xQx + ") z ORDER BY z.code							"
  
    IF SQLEXEC(conhandle,xQx,"csr_assets") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAsset_Filter(vFilter,vValue,vYear)
  xQx = "CALL hmhs_cid.filter_assets(?vFilter,?vValue,?vYear) "
  
    IF SQLEXEC(conhandle,xQx,"csr_assets") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAsset
  xQx = "INSERT INTO hmhs_cid.assets("
  xQx = xQx + "catId, "
  xQx = xQx + "supId, "
  xQx = xQx + "statId, "
  xQx = xQx + "code, "
  xQx = xQx + "assetName, "
  xQx = xQx + "model, "
  xQx = xQx + "brand, "
  xQx = xQx + "description, "
  xQx = xQx + "serialNumber, "
  xQx = xQx + "date_purchased, "
  xQx = xQx + "unitPrice, "
  xQx = xQx + "endOfWarranty_date, "
  xQx = xQx + "delivery_date "
  xQx = xQx + ") "
  
  xQx = xQx + "VALUES(?vAdd_Asset_Category, "
  xQx = xQx + "?vAdd_Asset_Supplier, "
  xQx = xQx + "?vAdd_Asset_Status, "
  xQx = xQx + "?vAdd_Asset_Code, "
  xQx = xQx + "?vAdd_Asset_Item, "
  xQx = xQx + "?vAdd_Asset_Model, "
  xQx = xQx + "?vAdd_Asset_Brand, "
  xQx = xQx + "?vAdd_Asset_Description, "
  xQx = xQx + "?vAdd_Asset_Serial, "
  xQx = xQx + "?vAdd_Asset_Purchased, "
  xQx = xQx + "?vAdd_Asset_Price, "
  xQx = xQx + "?vAdd_Asset_Warranty, "
  xQx = xQx + "?vAdd_Asset_delivery_date "
  xQx = xQx + ") "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAsset(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET catId=?vAdd_Asset_Category, "
  xQx = xQx + "supId=?vAdd_Asset_Supplier, "
  xQx = xQx + "statId=?vAdd_Asset_Status, "
  xQx = xQx + "code=?vAdd_Asset_Code, "
  xQx = xQx + "assetName=?vAdd_Asset_Item, "
  xQx = xQx + "model=?vAdd_Asset_Model, "
  xQx = xQx + "brand=?vAdd_Asset_Brand, "
  xQx = xQx + "description=?vAdd_Asset_Description, "
  xQx = xQx + "serialNumber=?vAdd_Asset_Serial, "
  xQx = xQx + "date_purchased=?vAdd_Asset_Purchased, "
  xQx = xQx + "unitPrice=?vAdd_Asset_Price, "
  xQx = xQx + "endOfWarranty_date=?vAdd_Asset_Warranty, "
  xQx = xQx + "delivery_date=?vAdd_Asset_delivery_date "
  xQx = xQx + "WHERE assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_Asset(privId)
  xQx = "SELECT a.catId,a.supId,a.statId, "
  xQx = xQx + "a.code,a.assetName,a.model,a.brand,a.description,a.serialNumber, "
  xQx = xQx + "a.date_purchased,a.unitPrice,a.endOfWarranty_date, "
  xQx = xQx + "a.delivery_date, "
  xQx = xQx + "a.assetId as Id "
  xQx = xQx + "FROM hmhs_cid.assets a "
  xQx = xQx + "WHERE a.assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editAssets") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAsset(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE assetId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAssetGroup_Category(privId)
  xQx = "SELECT a.groupName  "
  xQx = xQx + "FROM hmhs_cid.assetgroup a  "
  xQx = xQx + "WHERE a.assetGroupId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_assgrp_cat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC	

FUNCTION getAsset_GroupSearch(vSearch)
  xQx = "SELECT a.groupName,a.assetGroupId AS Id  "
  xQx = xQx + "FROM hmhs_cid.assetgroup a "
  xQx = xQx + "WHERE a.groupName LIKE '%"+vSearch+"%' "
  xQx = xQx + "ORDER BY a.groupName  "
  
    IF SQLEXEC(conhandle,xQx,"csr_assetGroup") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAsset_Status(privId)
  xQx = "SELECT a.status "
  xQx = xQx + "FROM hmhs_cid.status a "
  xQx = xQx + "WHERE a.statId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_ass_status") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAsset_editSupplier(privId)
  xQx = "SELECT a.supName "
  xQx = xQx + "FROM hmhs_cid.suppliers a "
  xQx = xQx + "WHERE a.supId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_ass_Supplier") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAsset_Supplier(vSearch)
  xQx = "SELECT a.supName,a.supId as Id "
  xQx = xQx + "FROM hmhs_cid.suppliers a "
  xQx = xQx + "WHERE a.supName LIKE '%"+vSearch+"%' "
  xQx = xQx + "ORDER BY a.supName "
  
    IF SQLEXEC(conhandle,xQx,"csr_assetSupplier") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvManualItemView(privId)
  xQx = "SELECT a.clientName,b.groupName,c.supName,a.unit,a.quantity,a.unitPrice,a.amount FROM hmhs_cid.invoiceitems a  "
  xQx = xQx + "JOIN hmhs_cid.assetgroup b ON (a.assetGroupId=b.assetGroupId)  "
  xQx = xQx + "JOIN hmhs_cid.suppliers c ON (a.supId=c.supId)  "
  xQx = xQx + "WHERE a.invItmId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_InvManualItemView") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC	

*#---
*#---------------------------------------------------------------


*#----- SQL Query for Asset Specification ------------------------
*#---
FUNCTION getAssSpecs(privId)
  xQx = "SELECT a.specsfield,a.specsvalue,a.specsId as Id "
  xQx = xQx + "FROM hmhs_cid.specifications a "
  xQx = xQx + "WHERE a.assetId = ?privId "
  xQx = xQx + "ORDER BY a.specsId "
  
    IF SQLEXEC(conhandle,xQx,"csr_assSpecs") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAssSpecs(privId,privField,privValue)
  xQx = "INSERT INTO hmhs_cid.specifications("
  xQx = xQx + "assetId,specsfield,specsvalue) "
  xQx = xQx + "VALUES(?privId,?privField,?privValue) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssSpecs(privId,privField,privValue)
  xQx = "UPDATE hmhs_cid.specifications "
  xQx = xQx + "SET specsfield=?privField, specsvalue=?privValue  "
  xQx = xQx + "WHERE specsId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_AssSpecs(privId)
  xQx = "SELECT a.specsfield,a.specsvalue,a.specsId as Id "
  xQx = xQx + "FROM hmhs_cid.specifications a "
  xQx = xQx + "WHERE a.specsId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editAssSpecs") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAssSpecs(privId)
  xQx = "DELETE FROM hmhs_cid.specifications "
  xQx = xQx + "WHERE specsId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Accountability ------------------------
*#---
FUNCTION getAccount(vYear)
  xQx = "SELECT											"
  xQx = xQx + "  a.controlNumber,							"
  xQx = xQx + "  a.empName,								"
  xQx = xQx + "  a.co_maker_name,							"
  xQx = xQx + "  a.issued_name,							"
  xQx = xQx + "  a.created_by,							"
  xQx = xQx + "  a.acctId        AS Id,					"
  xQx = xQx + "  a.empId,									"
  xQx = xQx + "  a.isPrinted     AS print,				"
  xQx = xQx + "  a.acctStatId    AS status				"
  xQx = xQx + "FROM hmhs_cid.accountabilities a			"
  xQx = xQx + "WHERE a.isDeleted = 0						"
  xQx = xQx + "    AND YEAR(a.created_date) = ?vYear		"
  xQx = xQx + "ORDER BY a.controlNumber					"
  
    IF SQLEXEC(conhandle,xQx,"csr_Account") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAccount_Filter(vFilter,vValue,vYear)
  xQx = "CALL hmhs_cid.filter_accountability(?vFilter,?vValue,?vYear) "
  
    IF SQLEXEC(conhandle,xQx,"csr_Account") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAccount(priv1,priv2,priv3,priv4,priv5,priv6,priv7,priv8,priv9,priv10,priv11,priv12,priv13)
  xQx = "INSERT INTO hmhs_cid.accountabilities("
  xQx = xQx + "acctStatId,empId,controlNumber,co_maker_id,depId,empName,empDept,empPos,co_maker_name,series_no,series,created_by_id,created_by) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4,?priv5,?priv6,?priv7,?priv8,?priv9,?priv10,?priv11,?priv12,?priv13) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAccount(privId,priv1,priv2,priv3,priv4,priv5,priv6,priv7,priv8,priv9)
  xQx = "UPDATE hmhs_cid.accountabilities "
  xQx = xQx + "SET acctStatId=?priv1, empId=?priv2,  "
  xQx = xQx + "controlNumber=?priv3, co_maker_id=?priv4, depId=?priv5,  "
  xQx = xQx + "empName=?priv6, empDept=?priv7, "
  xQx = xQx + "empPos=?priv8, co_maker_name=?priv9  "
  xQx = xQx + "WHERE acctId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_Account(privId)
  
  xQx = "		SELECT									"
  xQx = xQx + "  a.controlNumber,						"
  xQx = xQx + "  b.fullname as emp,					"
  xQx = xQx + "  c.fullname as co_maker_name,			"
  xQx = xQx + "  a.acctId        AS Id,				"
  xQx = xQx + "  a.acctStatId,						"
  xQx = xQx + "  a.empId,								"
  xQx = xQx + "  a.depId,								"
  xQx = xQx + "  a.co_maker_id,						"
  xQx = xQx + "  e.department,						"
  xQx = xQx + "  f.position							"
  xQx = xQx + "FROM hmhs_cid.accountabilities a		"
  xQx = xQx + "  JOIN hmhs_hrd.employees b			"
  xQx = xQx + "    ON (a.empId = b.empId)				"
  xQx = xQx + "  JOIN hmhs_hrd.employees c			"
  xQx = xQx + "    ON (a.co_maker_id = c.empId)		"
  xQx = xQx + "  JOIN hmhs_hrd.servicerecords d		"
  xQx = xQx + "    ON (a.empId = d.empId)				"
  xQx = xQx + "  JOIN hmhs_hrd.departments e			"
  xQx = xQx + "    ON (d.depId = e.departmentId)		"
  xQx = xQx + "  JOIN hmhs_hrd.positions f			"
  xQx = xQx + "    ON (d.posId = f.positionId)		"
  xQx = xQx + "WHERE a.acctId = ?privId				"
  xQx = xQx + "    AND d.isDisabled = 0				"
  
    IF SQLEXEC(conhandle,xQx,"csr_editAccount") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAccount(privId)
  xQx = "DELETE FROM hmhs_cid.accountabilities "
  xQx = xQx + "WHERE acctId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAccountStatus
  xQx = "SELECT a.acctStatus,a.acctStatId as Id FROM hmhs_cid.accountabilitystatus a "
  xQx = xQx + "WHERE a.acctStatId != 2 ORDER BY a.acctStatus "	

    IF SQLEXEC(conhandle,xQx,"csr_AccountStatus") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAccount_Stat(privId)
  xQx = "SELECT a.acctStatus FROM hmhs_cid.accountabilitystatus a "
  xQx = xQx + "WHERE a.acctStatId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_AccountStat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAccount_Emp(privId)
  xQx = "SELECT a.fullname FROM hmhs_hrd.employees a "
  xQx = xQx + "WHERE empId = ?privId "
    
    IF SQLEXEC(conhandle,xQx,"csr_AccountEmp") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAccount_Issby(privId)
  xQx = "SELECT a.fullname FROM hmhs_hrd.employees a "
  xQx = xQx + "WHERE empId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_AccountIssby") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAccountEmpList(vSearch)
  
  xQx = "		SELECT									"
  xQx = xQx + "  a.fullname,							"
  xQx = xQx + "  c.department,						"
  xQx = xQx + "  c.departmentId as depId,				"
  xQx = xQx + "  d.position,							"
  xQx = xQx + " a.empId      AS Id					"
  xQx = xQx + "FROM hmhs_hrd.employees a				"
  xQx = xQx + "  JOIN hmhs_hrd.servicerecords b		"
  xQx = xQx + "    ON (a.empId = b.empId)				"
  xQx = xQx + "  JOIN hmhs_hrd.departments c			"
  xQx = xQx + "    ON (b.depId = c.departmentId)		"
  xQx = xQx + "  JOIN hmhs_hrd.positions d			"
  xQx = xQx + "    ON (b.posId = d.positionId)		"
  xQx = xQx + "WHERE b.isDisabled = 0 AND				"
  xQx = xQx + "a.fullname LIKE '%"+vSearch+"%'		"
  xQx = xQx + "ORDER BY a.fullname					"	

    IF SQLEXEC(conhandle,xQx,"csr_AccountEmpList") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAccountIssuedbyList(vSearch)
  
  xQx = "		SELECT									"
  xQx = xQx + "  a.fullname,							"
  xQx = xQx + "  c.department,						"
  xQx = xQx + "  d.position,							"
  xQx = xQx + " a.empId      AS Id					"
  xQx = xQx + "FROM hmhs_hrd.employees a				"
  xQx = xQx + "  JOIN hmhs_hrd.servicerecords b		"
  xQx = xQx + "    ON (a.empId = b.empId)				"
  xQx = xQx + "  JOIN hmhs_hrd.departments c			"
  xQx = xQx + "    ON (b.depId = c.departmentId)		"
  xQx = xQx + "  JOIN hmhs_hrd.positions d			"
  xQx = xQx + "    ON (b.posId = d.positionId)		"
  xQx = xQx + "WHERE b.isDisabled = 0 AND				"
  xQx = xQx + "a.fullname LIKE '%"+vSearch+"%'		"
  xQx = xQx + "ORDER BY a.fullname					"	

    IF SQLEXEC(conhandle,xQx,"csr_AccountIssuedbyList") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION clrAccount(privId)
  xQx = "UPDATE hmhs_cid.accountabilities "
  xQx = xQx + "SET acctStatId = 2 "
  xQx = xQx + "WHERE acctId = ?privId	"

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION prntAccount(privId)
  xQx = "UPDATE hmhs_cid.accountabilities "
  xQx = xQx + "SET isPrinted = 1 "
  xQx = xQx + "WHERE acctId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION chkLastAccountSeries(yearId)
  xQx = "SELECT COALESCE(MAX(a.series_no),0) AS series "
  xQx = xQx + "FROM hmhs_cid.accountabilities a "
  xQx = xQx + "WHERE a.series = ?yearId AND a.isDeleted = 0 "
  
    IF SQLEXEC(conhandle,xQx,"csr_lastno") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------


*#----- SQL Query for Accountability Items ------------------------
*#---
FUNCTION getAccountItem(privId)
  xQx = "SELECT CONCAT(b.code,' - ',b.assetName) as item,a.date_issued,a.acctItmId as Id, "
  xQx = xQx + "a.assetId "
  xQx = xQx + "FROM hmhs_cid.accountitems a "
  xQx = xQx + "JOIN hmhs_cid.assets b "
  xQx = xQx + "ON (a.assetId=b.assetId) "
  xQx = xQx + "JOIN hmhs_cid.status c "
  xQx = xQx + "ON (a.issue_status=c.statId) "
  xQx = xQx + "WHERE a.acctId = ?privId AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY b.code "
  
    IF SQLEXEC(conhandle,xQx,"csr_AccountItem") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAccountItem(priv1,priv2,priv3,priv4,priv5,priv6)
  xQx = "INSERT INTO hmhs_cid.accountitems("
  xQx = xQx + "acctId,empId,assetId,date_issued,remarks,empName) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4,?priv5,?priv6) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAccountItem(privId,priv1,priv3,priv4)
  xQx = "UPDATE hmhs_cid.accountitems "
  xQx = xQx + "SET assetId=?priv1, remarks=?priv3, empName=?priv4 "
  xQx = xQx + "WHERE acctItmId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION set_ItemOnStock(privId)
  xQx = "UPDATE hmhs_cid.assets 			"
  xQx = xQx + "SET statId = 7 			"
  xQx = xQx + "WHERE assetId = ?privId 	"
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_AccountItem(privId)
  xQx = "SELECT CONCAT(b.code,' - ',b.assetName) as item,a.date_issued,a.acctItmId as Id, "
  xQx = xQx + "a.assetId, a.remarks "
  xQx = xQx + "FROM hmhs_cid.accountitems a "
  xQx = xQx + "JOIN hmhs_cid.assets b "
  xQx = xQx + "ON (a.assetId=b.assetId) "
  xQx = xQx + "JOIN hmhs_cid.status c "
  xQx = xQx + "ON (a.issue_status=c.statId) "
  xQx = xQx + "WHERE a.acctItmId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editAccountItem") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAccountItem(privId)
  xQx = "UPDATE hmhs_cid.accountitems "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE acctItmId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delget_AccountItem(privId)
  xQx = "SELECT a.assetId AS Id FROM hmhs_cid.accountitems a "
  xQx = xQx + "WHERE a.acctItmId=?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_delgetAccountItm") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION enableAsset(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET isAccount = 0, statId = 7 "
  xQx = xQx + "WHERE assetId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION disableAsset(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET isAccount = 1, statId = 1 "
  xQx = xQx + "WHERE assetId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAcctItm_Asset(vSearch)
  xQx = "SELECT CONCAT(a.code,' - ',a.assetName) AS item, a.assetId as Id FROM hmhs_cid.assets a "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.isAccount = 0 AND a.statId = 7 "
  xQx = xQx + "AND CONCAT(a.code,' - ',a.assetName) LIKE '%"+vSearch+"%' "
  xQx = xQx + "ORDER BY a.code "	

    IF SQLEXEC(conhandle,xQx,"csr_AcctItmAsset") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAcctItm_Asset_edit(privId)
  xQx = "SELECT DISTINCT z.item,z.Id FROM ( "
  xQx = xQx + "SELECT CONCAT(a.code,' - ',a.assetName) AS item, a.assetId AS Id FROM hmhs_cid.assets a "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.isAccount = 0 AND a.statId = 1 "
  xQx = xQx + "UNION "
  xQx = xQx + "SELECT CONCAT(b.code,' - ',b.assetName) AS item, b.assetId AS Id FROM hmhs_cid.assets b "
  xQx = xQx + "WHERE b.assetId = ?privId ) z "
  xQx = xQx + "ORDER BY z.item "

    IF SQLEXEC(conhandle,xQx,"csr_AcctItmAsset") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAcctItm_editAsset(privId)
  xQx = "SELECT CONCAT(a.code,' - ',a.assetName) AS item FROM hmhs_cid.assets a "
  xQx = xQx + "WHERE a.assetId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_edit_AcctItmAsset") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAcctItm_editStatus(privId)
  xQx = "SELECT a.status FROM hmhs_cid.status a "
  xQx = xQx + "WHERE a.statId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_edit_AcctItmStatus") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION ret_AccountItem(privId,priv1,priv2)
  xQx = "UPDATE hmhs_cid.accountitems "
  xQx = xQx + "SET date_returned = ?priv1 "
  xQx = xQx + "WHERE acctItmId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
  
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET isAccount = 0 "
  xQx = xQx + "WHERE assetId = ?priv2 "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF	
ENDFUNC

FUNCTION ret_AccountItem2(priv1,priv2,priv3)
  xQx = "UPDATE hmhs_cid.accountitems "
  xQx = xQx + "SET date_returned = ?priv1, "
  xQx = xQx + "isRemove = 1, "
  xQx = xQx + "removeby = ?priv3 "
  xQx = xQx + "WHERE assetId = ?priv2 AND date_returned = 0 AND isDeleted = 0 "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
  
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET isAccount = 0 "
  xQx = xQx + "WHERE assetId = ?priv2 "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF	
ENDFUNC

FUNCTION updAccountItem_Issue(privId,priv_date)
  xQx = "UPDATE hmhs_cid.accountitems "
  xQx = xQx + "SET date_issued=?priv_date "
  xQx = xQx + "WHERE acctId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAccount_Issue(privId,priv_issby,priv_issname,priv_date)
  xQx = "UPDATE hmhs_cid.accountabilities "
  xQx = xQx + "SET issued_by=?priv_issby, issued_name=?priv_issname, issued_date=?priv_date "
  xQx = xQx + "WHERE acctId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------


*#----- SQL Query for Asset history ------------------------
*#---

FUNCTION getAssetPurHistory(privId)
  xQx = " SELECT "
    xQx = xQx + "a.date_purchased "
  xQx = xQx + "FROM hmhs_cid.assets a "
  xQx = xQx + "WHERE a.assetId = ?privId AND a.isDeleted = 0 "

    IF SQLEXEC(conhandle,xQx,"csr_AssetPurHistory") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAssetHistory(privId)
  xQx = " SELECT "
    xQx = xQx + "b.controlNumber AS accountability_ref, "
    xQx = xQx + "a.empName      AS Issued_to, "
    xQx = xQx + "a.date_issued, "
    xQx = xQx + "a.date_returned, "
    xQx = xQx + "a.acctItmId "
  xQx = xQx + "FROM hmhs_cid.accountitems a "
    xQx = xQx + "LEFT JOIN hmhs_cid.accountabilities b "
    xQx = xQx + "ON (a.acctId = b.acctId) "
    xQx = xQx + "LEFT JOIN hmhs_hrd.employees c "
    xQx = xQx + "ON (a.empId = c.empId) "
  xQx = xQx + "WHERE a.assetId = ?privId AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.acctItmId "

    IF SQLEXEC(conhandle,xQx,"csr_AssetHistory") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAssetRepHistory(privId)
  xQx = " SELECT "
    xQx = xQx + "a.accountable,a.remarks, "
    xQx = xQx + "a.date_pulledout,a.date_returned "
  xQx = xQx + "FROM hmhs_cid.repairassets a "
  xQx = xQx + "WHERE a.assetId = ?privId AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.repassetId "

    IF SQLEXEC(conhandle,xQx,"csr_AssetRepHistory") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAssetDisHistory(privId)
  xQx = " SELECT "
    xQx = xQx + "b.status,a.remarks,a.date "
  xQx = xQx + "FROM hmhs_cid.discardassets a "
  xQx = xQx + "LEFT JOIN hmhs_cid.status b "
    xQx = xQx + "ON (a.status = b.statId) "
  xQx = xQx + "WHERE a.assetId = ?privId AND a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.discardId "

    IF SQLEXEC(conhandle,xQx,"csr_AssetDisHistory") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAssetDisposeHistory(privId)
  xQx = " SELECT "
    xQx = xQx + "a.date,a.reason "
  xQx = xQx + "FROM hmhs_cid.disposeassets a "
  xQx = xQx + "WHERE a.assetId = ?privId AND a.isDeleted = 0 "

    IF SQLEXEC(conhandle,xQx,"csr_AssetDisposeHistory") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION prnAssetHistory(privId)
  xQx = "SELECT 				"
  xQx = xQx + "  z.col1, 		"
  xQx = xQx + "  z.col2, 		"
  xQx = xQx + "  z.col3, 		"
  xQx = xQx + "  z.col4,		"
  xQx = xQx + "  z.col5,		"
  xQx = xQx + "  z.col6,		"
  xQx = xQx + "  z.Id 		"
  xQx = xQx + "FROM (SELECT	"
  xQx = xQx + "        b.controlNumber    AS col1,	"
  xQx = xQx + "        a.empName          AS col2,	"
  xQx = xQx + "        a.date_issued      AS col3,	"
  xQx = xQx + "        a.date_returned    AS col4,	"
  xQx = xQx + "        'Accountabilities' AS col5,	"
  xQx = xQx + "        '1'                AS col6,	"
  xQx = xQx + "        a.acctItmId        AS Id		"
  xQx = xQx + "      FROM hmhs_cid.accountitems a		"
  xQx = xQx + "        LEFT JOIN hmhs_cid.accountabilities b	"
  xQx = xQx + "          ON (a.acctId = b.acctId)				"
  xQx = xQx + "        LEFT JOIN hmhs_hrd.employees c			"
  xQx = xQx + "          ON (a.empId = c.empId)				"
  xQx = xQx + "      WHERE a.assetId = ?privId				"
  xQx = xQx + "          AND a.isDeleted = 0 UNION ALL SELECT	"
  xQx = xQx + "                             a.supplier	       AS col1,	"
  xQx = xQx + "                             a.accountable        AS col2,	"
  xQx = xQx + "                             a.date_pulledout     AS col3, "
  xQx = xQx + "                             a.date_returned      AS col4, "
  xQx = xQx + "                             'Repair/Maintenance' AS col5, "
  xQx = xQx + "                             '2'                  AS col6, "
  xQx = xQx + "                             a.repassetId         AS Id 	"
  xQx = xQx + "                             FROM hmhs_cid.repairassets a	"
  xQx = xQx + "                             WHERE a.assetId = ?privId		"
  xQx = xQx + "                             AND a.isDeleted = 0) z		"

    IF SQLEXEC(conhandle,xQx,"csr_prnAssetHistory") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Getting all employee list ------------------------
*#---
FUNCTION getEmpList
  xQx = "SELECT a.fullname,a.empId FROM hmhs_hrd.employees a "
  xQx = xQx + "ORDER BY a.fullname "	

    IF SQLEXEC(conhandle,xQx,"csr_EmpList") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Printing of Accountability Form ------------------------
*#---
FUNCTION get_prn_Invoice(privId)

  xQx = "SELECT 										"
  xQx = xQx + "  a.clientName, 							"
  xQx = xQx + "  b.contactPerson, 							"
  xQx = xQx + "  a.clientAddress,							"
  xQx = xQx + "  a.salesPerson,							"
  xQx = xQx + "  a.bustypeName, 							"
  xQx = xQx + "  a.date_created,							"
  xQx = xQx + "  a.terms,							"
  xQx = xQx + "  a.controlNo,							"
  xQx = xQx + "  a.due_date,						"				
  xQx = xQx + "  a.sc_tin_no,						"
  xQx = xQx + "  a.osca_pwd_no,							"
  xQx = xQx + "  a.vatableSale, 						"
  xQx = xQx + "  a.zeroRatedSale, 					"
  xQx = xQx + "  a.vat, 						"
  xQx = xQx + "  a.totalAmountDue, 					"
  xQx = xQx + "  a.tin 					"
  xQx = xQx + "FROM hmhs_cid.invoices a		"
  xQx = xQx + "JOIN hmhs_cid.clients b				"
  xQx = xQx + "ON (a.clientId = b.clientId)					"
  xQx = xQx + "WHERE a.invoiceId = ?privId					"

    IF SQLEXEC(conhandle,xQx,"csr_PrintInvoice") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_prn_InvoiceItem(privId)

  xQx = "SELECT												"
  xQx = xQx + "  (SELECT SUM(d.quantity) FROM hmhs_cid.invoiceitems d WHERE d.invoiceId = ?privId AND d.assetGroupId = a.assetGroupId GROUP BY d.assetGroupId ORDER BY d.assetGroupId,d.invItmId) AS quantity,									"
  xQx = xQx + "  COALESCE(a.unit,b.unit) AS unit,						"
  xQx = xQx + "  b.groupName AS description,	"
  xQx = xQx + "  SUM(a.amount) AS price,								"
  xQx = xQx + "  SUM(a.amount*a.quantity) AS amount,					"
  xQx = xQx + "  a.assetGroupId								"
  xQx = xQx + "FROM hmhs_cid.invoiceitems a					"
  xQx = xQx + "  JOIN hmhs_cid.assetgroup b					"
  xQx = xQx + "    ON (a.assetGroupId = b.assetGroupId)		"
  xQx = xQx + "WHERE a.invoiceId = ?privId					"
  xQx = xQx + "AND a.isRemove = 0					"
  xQx = xQx + "GROUP BY a.assetGroupId	 					"
  xQx = xQx + "ORDER BY a.invItmId	 						"

    IF SQLEXEC(conhandle,xQx,"csr_PrintInvoiceItem") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_prn_DeliverItem(privId)

  xQx = "SELECT												"
  xQx = xQx + "  (SELECT SUM(d.quantity) FROM hmhs_cid.invoiceitems d WHERE d.invoiceId = ?privId AND d.assetGroupId = a.assetGroupId GROUP BY d.assetGroupId ORDER BY d.assetGroupId,d.invItmId) AS quantity,									"
  xQx = xQx + "  COALESCE(a.unit,b.unit) AS unit,						"
  xQx = xQx + "  b.groupName AS description,	"
  xQx = xQx + "  COALESCE(c.serialNumber,a.clientName) AS serialNumber,		"
  xQx = xQx + "  a.assetGroupId,								"
  xQx = xQx + "  a.invItmId,a.assetId							"
  xQx = xQx + "FROM hmhs_cid.invoiceitems a					"
  xQx = xQx + "  LEFT JOIN hmhs_cid.assets c					"
  xQx = xQx + "    ON (a.assetId=c.assetId)		"
  xQx = xQx + "  JOIN hmhs_cid.assetgroup b					"
  xQx = xQx + "    ON (a.assetGroupId = b.assetGroupId)		"
  xQx = xQx + "WHERE a.invoiceId = ?privId					"
  xQx = xQx + "AND a.isRemove = 0					"
  xQx = xQx + "ORDER BY a.assetGroupId,a.invItmId	 			"

    IF SQLEXEC(conhandle,xQx,"csr_PrintDeliverItem") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC


*#---
*#---------------------------------------------------------------


*#----- SQL Query for Asset Tagging ------------------------
*#---
FUNCTION getStat_tag
  xQx = "SELECT a.status,a.statId as Id "
  xQx = xQx + "FROM hmhs_cid.status a "
  xQx = xQx + "WHERE a.statId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "AND a.statId != 1 AND a.statId !=4 AND a.statId !=5 AND a.statId !=7 "
  xQx = xQx + "ORDER BY a.status "
  
    IF SQLEXEC(conhandle,xQx,"csr_stat_tag") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getStat_tag_wstock
  xQx = "SELECT a.status,a.statId as Id "
  xQx = xQx + "FROM hmhs_cid.status a "
  xQx = xQx + "WHERE a.statId != 0 AND a.isDeleted = 0 "
  xQx = xQx + "AND a.statId != 1 AND a.statId !=4 AND a.statId !=5 "
  xQx = xQx + "ORDER BY a.status "
  
    IF SQLEXEC(conhandle,xQx,"csr_stat_tag_wstock") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION tagItem(priv1,priv2,priv3,priv4)
  xQx = "INSERT INTO hmhs_cid.discardassets("
  xQx = xQx + "assetId,date,remarks,status) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION disposeItem(priv1,priv2,priv3,priv4,priv5)
  xQx = "INSERT INTO hmhs_cid.disposeassets("
  xQx = xQx + "assetId,date,remarks,status,reason) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4,?priv5) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION tagItemStatus(privId,privStat)
  xQx = "UPDATE hmhs_cid.assets SET "
  xQx = xQx + "statId = ?privStat "
  xQx = xQx + "WHERE assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------


*#----- SQL Query for Asset Repair ------------------------
*#---
FUNCTION getAssetRepair(privId)
  xQx = "SELECT a.accountable,a.remarks,a.date_pulledout,a.date_returned,a.repassetId as Id "
  xQx = xQx + "FROM hmhs_cid.repairassets a "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.assetId = ?privId "
  xQx = xQx + "ORDER BY a.date_pulledout "
  
    IF SQLEXEC(conhandle,xQx,"csr_assetRepair") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAssetRepair(priv1,priv2,priv3,priv4,priv5,priv6,priv7)
  xQx = "INSERT INTO hmhs_cid.repairassets("
  xQx = xQx + "assetId,accountableId,accountable,"
  xQx = xQx + "date_pulledout,date_returned,remarks,supplier) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4,?priv5,?priv6,?priv7) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetRepair(privId,priv1,priv2,priv3,priv4,priv5,priv6)
  xQx = "UPDATE hmhs_cid.repairassets "
  xQx = xQx + "SET accountableId=?priv1, "
  xQx = xQx + "accountable=?priv2, "
  xQx = xQx + "date_pulledout=?priv3, "
  xQx = xQx + "date_returned=?priv4, "
  xQx = xQx + "remarks=?priv5, "
  xQx = xQx + "supplier=?priv6 "
  xQx = xQx + "WHERE repassetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_AssetRepair(privId)
  xQx = "SELECT a.accountable,a.accountableId as acctId,a.remarks,a.date_pulledout, "
  xQx = xQx + "a.date_returned,a.supplier,a.repassetId as Id "
  xQx = xQx + "FROM hmhs_cid.repairassets a "
  xQx = xQx + "WHERE a.isDeleted = 0 "
  xQx = xQx + "AND a.repassetId =?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editassetRepair") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAssetRepair(privId)
  xQx = "UPDATE hmhs_cid.repairassets "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE repassetId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEmpList_AssRep(privId)
  xQx = "SELECT a.fullname,a.empId FROM hmhs_hrd.employees a "
  xQx = xQx + "WHERE a.empId=?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_EmpList_AssRep") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetStatRepair(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET statId=5 "
  xQx = xQx + "WHERE assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetStatOnStock(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET statId=7 "
  xQx = xQx + "WHERE assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetStatDeployed(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET statId=1 "
  xQx = xQx + "WHERE assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION chk_AssetRepair(privId)
  xQx = "SELECT a.repassetId "
  xQx = xQx + "FROM hmhs_cid.repairassets a "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.assetId = ?privId AND a.date_returned = 0 "
  xQx = xQx + "ORDER BY a.date_pulledout "
  
    IF SQLEXEC(conhandle,xQx,"csr_chkassetRepair") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------


*#----- SQL Query for Checking Access ------------------------
*#---
FUNCTION check_IfUserAdmin(uId)
  xQx = "SELECT a.userId FROM usermanagement.users a "
  xQx = xQx + "WHERE a.userId = ?uId AND a.username = 'admin' "

  IF SQLEXEC(conhandle,xQx,"csr_checkIfAdmin") = -1
    MESSAGEBOX(MESSAGE(),16,"SQL error")
    RETURN
  ENDIF
ENDFUNC

FUNCTION check_Module(uId,uModId,uAccId,csr_name)
  xQx = "CALL usermanagement.check_module(?uId,?uModId,?uAccId)"

    IF SQLEXEC(conHandle,xQx,csr_name) = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC

FUNCTION check_SystemAccess(uId,AppId,csr_name)
  xQx = "CALL usermanagement.check_access(?uId,?AppId)"
  
    IF SQLEXEC(conHandle,xQx,csr_name) = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------

*#----- SQL Query for Audit Trail ------------------------
*#---
FUNCTION ins_Log(uId,modId,affTable,actionTaken,activity)
  xQx = "CALL utilities.sp_audit_logs(?uId,?modId,?affTable,?actionTaken,?activity)"

    IF SQLEXEC(conHandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_user_Log(uId)
  xQx = "SELECT a.username FROM usermanagement.users a "
  xQx = xQx + "WHERE a.userId = ?uId "
  
    IF SQLEXEC(conHandle,xQx,"csr_getUserLog") = -1
      MESSAGEBOX(MESSAGE(),16)
    ENDIF
ENDFUNC

FUNCTION get_group_Log(gId)
  xQx = "SELECT a.groupName FROM usermanagement.groups a "
  xQx = xQx + "WHERE a.groupId = ?gId "
  
    IF SQLEXEC(conHandle,xQx,"csr_getGroupLog") = -1
      MESSAGEBOX(MESSAGE(),16)
    ENDIF
ENDFUNC

FUNCTION get_App_Log(aId)
  xQx = "SELECT a.applications FROM utilities.applications a "
  xQx = xQx + "WHERE a.applicationId = ?aId "
  
    IF SQLEXEC(conHandle,xQx,"csr_getAppLog") = -1
      MESSAGEBOX(MESSAGE(),16)
    ENDIF
ENDFUNC

FUNCTION get_Mod_Log(mId)
  xQx = "SELECT a.modulename FROM usermanagement.modules a "
  xQx = xQx + "WHERE a.moduleId = ?mId "
  
    IF SQLEXEC(conHandle,xQx,"csr_getModLog") = -1
      MESSAGEBOX(MESSAGE(),16)
    ENDIF
ENDFUNC
*#---
*#---------------------------------------------------------------

*#----- SQL Query for Reports ------------------------
*#---
FUNCTION rep_monthly_purchase(vMonth,vYear,vSort,vGroup)
  xQx = "SELECT												"						
  xQx = xQx + "a.code,										"
  xQx = xQx + "a.assetName,									"
  xQx = xQx + "c.categoryName,								"
  xQx = xQx + "b.supName,										"
  xQx = xQx + "d.department,									"
  xQx = xQx + "COALESCE(g.department,'On-Stock') AS cur_dep,	"	
  xQx = xQx + "COALESCE(e.empName,'No Accountability') AS cur_acct, "						
  xQx = xQx + "a.po_no,										"
  xQx = xQx + "a.inv_no,										"
  xQx = xQx + "a.pr_no,										"
  xQx = xQx + "a.delivery_date,								"
  xQx = xQx + "a.unitPrice									"
  xQx = xQx + vGroup
  xQx = xQx + "FROM hmhs_cid.assets a							"
  xQx = xQx + "LEFT JOIN hmhs_cid.suppliers b					"
  xQx = xQx + "ON (a.supId = b.supId)							"
  xQx = xQx + "LEFT JOIN hmhs_cid.categories c				"	
  xQx = xQx + "ON (a.catId = c.catId)							"
  xQx = xQx + "LEFT JOIN hmhs_hrd.departments d				"
  xQx = xQx + "ON (a.req_dep_id=d.departmentId)				"
  xQx = xQx + "LEFT JOIN hmhs_cid.accountitems e				"
  xQx = xQx + "ON (a.assetId=e.assetId AND e.isDeleted = 0)	"
  xQx = xQx + "LEFT JOIN hmhs_cid.accountabilities f			"
  xQx = xQx + "ON (e.acctId=f.acctId)							"
  xQx = xQx + "LEFT JOIN hmhs_hrd.departments g				"
  xQx = xQx + "ON (f.depId=g.departmentId)					"
  xQx = xQx + "WHERE a.isDeleted = 0							"
  xQx = xQx + "    AND MONTH(a.date_purchased) = ?vMonth		"
  xQx = xQx + "    AND YEAR(a.date_purchased) = ?vYear		"
  xQx = xQx + "ORDER BY 										"
  xQx = xQx + vSort

    IF SQLEXEC(conhandle,xQx,"csr_print_monthly_purchase") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_monthly_purchase_excel(vMonth,vYear,vSort)
  xQx = "SELECT												"						
  xQx = xQx + "a.code,										"
  xQx = xQx + "a.assetName,									"
  xQx = xQx + "c.categoryName,								"
  xQx = xQx + "b.supName,										"
  xQx = xQx + "d.department,									"
  xQx = xQx + "COALESCE(g.department,'On-Stock') AS cur_dep,	"	
  xQx = xQx + "COALESCE(e.empName,'No Accountability') AS cur_acct, "						
  xQx = xQx + "a.po_no,										"
  xQx = xQx + "a.inv_no,										"
  xQx = xQx + "a.pr_no,										"
  xQx = xQx + "a.delivery_date,								"
  xQx = xQx + "a.unitPrice									"
  xQx = xQx + "FROM hmhs_cid.assets a							"
  xQx = xQx + "LEFT JOIN hmhs_cid.suppliers b					"
  xQx = xQx + "ON (a.supId = b.supId)							"
  xQx = xQx + "LEFT JOIN hmhs_cid.categories c				"	
  xQx = xQx + "ON (a.catId = c.catId)							"
  xQx = xQx + "LEFT JOIN hmhs_hrd.departments d				"
  xQx = xQx + "ON (a.req_dep_id=d.departmentId)				"
  xQx = xQx + "LEFT JOIN hmhs_cid.accountitems e				"
  xQx = xQx + "ON (a.assetId=e.assetId AND e.isDeleted = 0)	"
  xQx = xQx + "LEFT JOIN hmhs_cid.accountabilities f			"
  xQx = xQx + "ON (e.acctId=f.acctId)							"
  xQx = xQx + "LEFT JOIN hmhs_hrd.departments g				"
  xQx = xQx + "ON (f.depId=g.departmentId)					"
  xQx = xQx + "WHERE a.isDeleted = 0 							"
  xQx = xQx + "    AND MONTH(a.date_purchased) = ?vMonth		"
  xQx = xQx + "    AND YEAR(a.date_purchased) = ?vYear		"
  xQx = xQx + "ORDER BY 										"
  xQx = xQx + vSort

    IF SQLEXEC(conhandle,xQx,"csr_print_monthly_purchase_excel") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*!*		FUNCTION rep_annual_deprec(vYear)
*!*			xQx = "SELECT													"
*!*			xQx = xQx + "  a.code,											"
*!*			xQx = xQx + "  a.assetName,										"
*!*			xQx = xQx + "  a.delivery_date,									"
*!*			xQx = xQx + "  a.unitPrice,										"
*!*			xQx = xQx + "  a.deprec_value,									"
*!*			xQx = xQx + "  (a.unitPrice - (a.deprec_value*1)) AS year1,		"
*!*			xQx = xQx + "  (a.unitPrice - (a.deprec_value*2)) AS year2,		"
*!*			xQx = xQx + "  (a.unitPrice - (a.deprec_value*3)) AS year3,		"
*!*			xQx = xQx + "  (a.unitPrice - (a.deprec_value*4)) AS year4,		"
*!*			xQx = xQx + "  (a.unitPrice - (a.deprec_value*5)) AS year5		"
*!*			xQx = xQx + "FROM hmhs_cid.assets a								"
*!*			xQx = xQx + "WHERE YEAR(a.delivery_date) = ?vYear				"
*!*			xQx = xQx + "ORDER BY a.code									"

*!*				IF SQLEXEC(conhandle,xQx,"csr_print_annual_deprec") = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC

FUNCTION rep_annual_total(vYear)
  xQx = "CALL hmhs_cid.annual_cost_total(?vYear)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_total") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_annual_spec_year(vYear)
  xQx = "CALL hmhs_cid.annual_cost_spec_year(?vYear)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_spec_year") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_annual_deprec_spec_year(vYear,vYear2)
  xQx = "CALL hmhs_cid.annual_deprec_spec_year(?vYear,?vYear2)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_deprec_spec_year") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_annual_deprec(vYear,vYear2)
  xQx = "CALL hmhs_cid.annual_deprec_total(?vYear,?vYear2)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_deprec") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_annual_total_prev(vYear)
  xQx = "CALL hmhs_cid.annual_cost_total(?vYear)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_total_prev") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_annual_spec_year_prev(vYear)
  xQx = "CALL hmhs_cid.annual_cost_spec_year(?vYear)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_spec_year_prev") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_annual_deprec_prev(vYear,vYear2)
  xQx = "CALL hmhs_cid.annual_deprec_total(?vYear,?vYear2)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_deprec_prev") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_annual_deprec_spec_year_prev(vYear,vYear2)
  xQx = "CALL hmhs_cid.annual_deprec_spec_year(?vYear,?vYear2)			"

    IF SQLEXEC(conhandle,xQx,"csr_print_annual_deprec_spec_year_prev") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_bidding(vMonth,vYear)
  xQx = "SELECT										"
  xQx = xQx + "  b.code,								"
  xQx = xQx + "  b.assetName,							"
  xQx = xQx + "  b.serialNumber,						"
  xQx = xQx + "  a.date,								"
  xQx = xQx + "  c.specsfield,						"
  xQx = xQx + "  c.specsvalue,						"
  xQx = xQx + "  a.assetId							"
  xQx = xQx + "FROM hmhs_cid.discardassets a			"
  xQx = xQx + "  JOIN hmhs_cid.assets b				"
  xQx = xQx + "    ON (a.assetId = b.assetId)			"
  xQx = xQx + "  JOIN hmhs_cid.specifications c		"
  xQx = xQx + "    ON (a.assetId = c.assetId)			"
  xQx = xQx + "WHERE a.status = 2						"
  xQx = xQx + "AND YEAR(a.date) = ?vYear				"
     xQx = xQx + "AND MONTH(a.date) = ?vMonth			"
  xQx = xQx + "ORDER BY a.date,b.code					"

    IF SQLEXEC(conhandle,xQx,"csr_print_bidding") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_for_disposal(vMonth,vYear)
  xQx = "SELECT										"
  xQx = xQx + "  b.code,								"
  xQx = xQx + "  b.assetName,							"
  xQx = xQx + "  b.serialNumber,						"
  xQx = xQx + "  a.date,								"
  xQx = xQx + "  c.specsfield,						"
  xQx = xQx + "  c.specsvalue,						"
  xQx = xQx + "  a.assetId							"
  xQx = xQx + "FROM hmhs_cid.discardassets a			"
  xQx = xQx + "  JOIN hmhs_cid.assets b				"
  xQx = xQx + "    ON (a.assetId = b.assetId)			"
  xQx = xQx + "  JOIN hmhs_cid.specifications c		"
  xQx = xQx + "    ON (a.assetId = c.assetId)			"
  xQx = xQx + "WHERE a.status = 3						"
  xQx = xQx + "AND YEAR(a.date) = ?vYear				"
     xQx = xQx + "AND MONTH(a.date) = ?vMonth			"
  xQx = xQx + "ORDER BY a.date,b.code					"

    IF SQLEXEC(conhandle,xQx,"csr_print_for_disposal") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_for_donation(vMonth,vYear)
  xQx = "SELECT										"
  xQx = xQx + "  b.code,								"
  xQx = xQx + "  b.assetName,							"
  xQx = xQx + "  b.serialNumber,						"
  xQx = xQx + "  a.date,								"
  xQx = xQx + "  c.specsfield,						"
  xQx = xQx + "  c.specsvalue,						"
  xQx = xQx + "  a.assetId							"
  xQx = xQx + "FROM hmhs_cid.discardassets a			"
  xQx = xQx + "  JOIN hmhs_cid.assets b				"
  xQx = xQx + "    ON (a.assetId = b.assetId)			"
  xQx = xQx + "  JOIN hmhs_cid.specifications c		"
  xQx = xQx + "    ON (a.assetId = c.assetId)			"
  xQx = xQx + "WHERE a.status = 8						"
  xQx = xQx + "AND YEAR(a.date) = ?vYear				"
     xQx = xQx + "AND MONTH(a.date) = ?vMonth			"
  xQx = xQx + "ORDER BY a.date,b.code					"

    IF SQLEXEC(conhandle,xQx,"csr_print_for_donation") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_dispose_ass(vMonth,vYear)
  xQx = "SELECT										"
  xQx = xQx + "  b.code,								"
  xQx = xQx + "  b.assetName,							"
  xQx = xQx + "  b.serialNumber,						"
  xQx = xQx + "  a.reason,							"
  xQx = xQx + "  a.date,								"
  xQx = xQx + "  c.specsfield,						"
  xQx = xQx + "  c.specsvalue,						"
  xQx = xQx + "  a.assetId							"
  xQx = xQx + "FROM hmhs_cid.disposeassets a			"
  xQx = xQx + "  JOIN hmhs_cid.assets b				"
  xQx = xQx + "    ON (a.assetId = b.assetId)			"
  xQx = xQx + "  JOIN hmhs_cid.specifications c		"
  xQx = xQx + "    ON (a.assetId = c.assetId)			"
  xQx = xQx + "WHERE a.status = 4						"
  xQx = xQx + "AND YEAR(a.date) = ?vYear				"
     xQx = xQx + "AND MONTH(a.date) = ?vMonth			"
  xQx = xQx + "ORDER BY a.date,b.code					"

    IF SQLEXEC(conhandle,xQx,"csr_print_dispose_ass") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC



FUNCTION rep_masterlist_excel(vSort,vStatus,vDateStart,vDateEnd)
  xQx = "SELECT  "
  xQx = xQx + "  a.code, "
  xQx = xQx + "  a.assetName, "
  xQx = xQx + "  c.categoryName, "
  xQx = xQx + "  a.brand, "
  xQx = xQx + "  a.model, "
  xQx = xQx + "  a.serialNumber, "
  xQx = xQx + "  b.supName, "
  xQx = xQx + "  g.groupName, "
  xQx = xQx + "  h.status, "
  xQx = xQx + "  a.po_no, "
  xQx = xQx + "  a.inv_no, "
  xQx = xQx + "  a.pr_no, "
  xQx = xQx + "  a.delivery_date, "
  xQx = xQx + "  a.date_purchased, "
  xQx = xQx + "  a.unitPrice "
  xQx = xQx + "FROM hmhs_cid.assets a "
  xQx = xQx + "  LEFT JOIN hmhs_cid.suppliers b "
  xQx = xQx + "    ON (a.supId = b.supId) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.categories c "
  xQx = xQx + "    ON (a.catId = c.catId) "
  xQx = xQx + "  LEFT JOIN hmhs_hrd.departments d "
  xQx = xQx + "    ON (a.req_dep_id = d.departmentId) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.accountitems e "
  xQx = xQx + "    ON (a.assetId = e.assetId AND e.isDeleted = 0) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.accountabilities f "
  xQx = xQx + "    ON (e.acctId = f.acctId) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.assetgroup g "
  xQx = xQx + "    ON (a.catId = g.assetGroupId) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.status h "
  xQx = xQx + "    ON (a.statId = h.statId) "
  xQx = xQx + "WHERE a.isDeleted = 0 "
  
  IF vStatus != 0 THEN
    xQx = xQx + " AND a.statId = ?vStatus "
  ENDIF
  
  *xQx = xQx + " AND a.date_purchased >= '?vDateStart' AND a.date_purchased <= '?vDateEnd' "
  xQx = xQx + " ORDER BY "
  xQx = xQx + vSort

    IF SQLEXEC(conhandle,xQx,"csr_print_masterlist_excel") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_invmanualitems_excel(vSort)
  xQx = "SELECT c.groupName,a.clientName AS SERIAL,e.supName,b.clientName,d.controlNo,d.date_created,IF(a.status=0,'Preparation','Sold') AS STATUS,a.quantity,a.unitPrice,a.amount		"	
  xQx = xQx + "FROM hmhs_cid.invoiceitems a "
  xQx = xQx + "  JOIN hmhs_cid.clients b ON (a.clientId=b.clientId) "
  xQx = xQx + "  JOIN hmhs_cid.assetgroup c ON (a.assetGroupId=c.assetGroupId) "
  xQx = xQx + "  JOIN hmhs_cid.invoices d ON (a.invoiceId=d.invoiceId) "
  xQx = xQx + "  JOIN hmhs_cid.suppliers e ON (a.supId=e.supId) "
  xQx = xQx + "WHERE a.assetId = 0 "
  xQx = xQx + "ORDER BY "
  xQx = xQx + vSort

    IF SQLEXEC(conhandle,xQx,"csr_print_invmanualitem_excel") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_asset(vSort,vGroup,vDate_from,vDate_to,vFilter)
  xQx = "SELECT		"
  xQx = xQx + "   a.code, "
  xQx = xQx + "  a.assetName, "
  xQx = xQx + "  c.categoryName, "
  xQx = xQx + "  b.supName, "
  xQx = xQx + "  d.department, "
  xQx = xQx + "  COALESCE(g.department,'On-Stock') AS cur_dep, "
  xQx = xQx + "  COALESCE(e.empName,'No Accountability') AS cur_acct, "
  xQx = xQx + "  a.po_no, "
  xQx = xQx + "  a.inv_no, "
  xQx = xQx + "  a.pr_no, "
  xQx = xQx + "  a.delivery_date, "
  xQx = xQx + "  a.date_purchased, "
  xQx = xQx + "  a.unitPrice, "
  xQx = xQx + "  a.est_useful_life, "
  xQx = xQx + "  a.deprec_value, "
  xQx = xQx + "  (IF(MONTH(a.delivery_date) = 12 AND DAY(a.delivery_date) <= 16, a.deprec_value / 12 ,0.0000) +  "
  xQx = xQx + " IF((TIMESTAMPDIFF(MONTH,a.delivery_date, NOW())) * a.deprec_value / 12  >= a.unitPrice, a.unitPrice ,(TIMESTAMPDIFF(MONTH,a.delivery_date, NOW())) * a.deprec_value / 12)) AS accu_deprec "
  xQx = xQx + vGroup
  xQx = xQx + "FROM hmhs_cid.assets a "
  xQx = xQx + "  LEFT JOIN hmhs_cid.suppliers b "
  xQx = xQx + "    ON (a.supId = b.supId) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.categories c "
  xQx = xQx + "    ON (a.catId = c.catId) "
  xQx = xQx + "  LEFT JOIN hmhs_hrd.departments d "
  xQx = xQx + "    ON (a.req_dep_id = d.departmentId) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.accountitems e "
  xQx = xQx + "    ON (a.assetId = e.assetId AND e.isDeleted = 0) "
  xQx = xQx + "  LEFT JOIN hmhs_cid.accountabilities f "
  xQx = xQx + "    ON (e.acctId = f.acctId) "
  xQx = xQx + "  LEFT JOIN hmhs_hrd.departments g "
  xQx = xQx + "    ON (f.depId = g.departmentId) "
  xQx = xQx + "WHERE a.isDeleted = 0 AND "
  xQx = xQx + "a.delivery_date >= ?vDate_from AND a.delivery_date <= ?vDate_to "
  xQx = xQx + vFilter
  xQx = xQx + "ORDER BY "
  xQx = xQx + vSort

    IF SQLEXEC(conhandle,xQx,"csr_print_assetlist") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC


*#---
*#---------------------------------------------------------------


*#----- SQL Query for Graphs ------------------------
*#---

FUNCTION grp_purchase_ass_byMonth(vYear)
  xQx = "SELECT															"
  xQx = xQx + "  MONTHNAME(a.date_purchased) AS monthly,					"
  xQx = xQx + "  SUM(IF(b.catId = 1,a.unitPrice,NULL))    data1,			"
  xQx = xQx + "  SUM(IF(b.catId = 2,a.unitPrice,NULL))    data2,			"
  xQx = xQx + "  SUM(IF(b.catId = 3,a.unitPrice,NULL))    data3			"
  xQx = xQx + "FROM hmhs_cid.assets a										"
  xQx = xQx + "  JOIN hmhs_cid.categories b								"
  xQx = xQx + "    ON (a.catId = b.catId)									"
  xQx = xQx + "WHERE YEAR(a.date_purchased) = ?vYear						"
  xQx = xQx + "    AND a.isDeleted = 0									"
  xQx = xQx + "GROUP BY MONTH(a.date_purchased)							"


    IF SQLEXEC(conhandle,xQx,"csr_grp_purchase_ass_byMonth") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION grp_purchase_ass_monthOf(vMonth,vYear)
  xQx = "SELECT											"
  xQx = xQx + "  b.categoryName,							"
  xQx = xQx + "  SUM(a.unitPrice) AS total				"
  xQx = xQx + "FROM hmhs_cid.assets a						"
  xQx = xQx + "  JOIN hmhs_cid.categories b				"
  xQx = xQx + "    ON (a.catId = b.catId)					"
  xQx = xQx + "WHERE YEAR(a.date_purchased) = ?vYear		"
  xQx = xQx + "    AND MONTH(a.date_purchased) = ?vMonth	"
  xQx = xQx + "    AND a.isDeleted = 0					"
  xQx = xQx + "GROUP BY a.catId							"


    IF SQLEXEC(conhandle,xQx,"csr_grp_purchase_ass_monthOf") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC



*#---
*#---------------------------------------------------------------

*#----- SQL Query for Signature Path ------------------------
*#---
FUNCTION get_sign_path
  xQx = "SELECT											"
  xQx = xQx + "  a.emp_sign_path as path					"
  xQx = xQx + "FROM utilities.configurations a			"

    IF SQLEXEC(conhandle,xQx,"csr_sign_path") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------

*#----- SQL Query for Checking Accountability Approval ------------------------
*#---
FUNCTION chk_acct_approval(vId)
  xQx = "SELECT											"
  xQx = xQx + "  a.acctId									"
  xQx = xQx + "FROM hmhs_cid.accountabilities a			"
  xQx = xQx + "WHERE a.hr_approv_by != 0					"
  xQx = xQx + "    AND a.mis_approv_by != 0				"
  xQx = xQx + "    AND a.acctg_approv_by != 0				"
  xQx = xQx + "    AND a.head_approv_by != 0				"
  xQx = xQx + "    AND a.acctId = ?vId					"

    IF SQLEXEC(conhandle,xQx,"csr_acct_approval") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------

*#----- SQL Query for Sending Accountability Approval ------------------------
*#---
FUNCTION get_acct_approvers(vId)
  xQx = "SELECT											"
  xQx = xQx + "  a.controlNumber,							"
  xQx = xQx + "  a.issued_name,							"
  xQx = xQx + "  a.issued_date,							"
  xQx = xQx + "  a.empName,								"
  xQx = xQx + "  a.empPos,								"
  xQx = xQx + "  a.empDept,								"
  xQx = xQx + "  a.co_maker_name,							"
  xQx = xQx + "  a.depId,									"
  xQx = xQx + "  a.hr_approv_by,							"
  xQx = xQx + "  a.head_approv_by,						"
  xQx = xQx + "  a.mis_approv_by,							"
  xQx = xQx + "  a.acctg_approv_by						"
  xQx = xQx + "FROM hmhs_cid.accountabilities a			"
  xQx = xQx + "WHERE a.acctId = ?vId						"

    IF SQLEXEC(conhandle,xQx,"csr_acct_approvers") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_acct__head_approver(vId)
  xQx = "SELECT DISTINCT									"
  xQx = xQx + "  (b.email) as email						"
  xQx = xQx + "FROM hmhs_hrd.dep_heads a					"
  xQx = xQx + "  JOIN usermanagement.users b				"
  xQx = xQx + "    ON (a.empId = b.empId)					"
  xQx = xQx + "WHERE a.depId = ?vId						"

    IF SQLEXEC(conhandle,xQx,"csr_acct__head_approver") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_acct__hr_approver()
  xQx = "SELECT											"
  xQx = xQx + "  b.email									"
  xQx = xQx + "FROM hmhs_cid.approvers a					"
  xQx = xQx + "  JOIN usermanagement.users b				"
  xQx = xQx + "    ON (a.userId = b.userId)				"
  xQx = xQx + "WHERE a.apprvId = 1						"

    IF SQLEXEC(conhandle,xQx,"csr_acct__hr_approver") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_acct__mis_approver()
  xQx = "SELECT											"
  xQx = xQx + "  b.email									"
  xQx = xQx + "FROM hmhs_cid.approvers a					"
  xQx = xQx + "  JOIN usermanagement.users b				"
  xQx = xQx + "    ON (a.userId = b.userId)				"
  xQx = xQx + "WHERE a.apprvId = 2						"

    IF SQLEXEC(conhandle,xQx,"csr_acct__mis_approver") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_acct__acctg_approver()
  xQx = "SELECT											"
  xQx = xQx + "  b.email									"
  xQx = xQx + "FROM hmhs_cid.approvers a					"
  xQx = xQx + "  JOIN usermanagement.users b				"
  xQx = xQx + "    ON (a.userId = b.userId)				"
  xQx = xQx + "WHERE a.apprvId = 3						"

    IF SQLEXEC(conhandle,xQx,"csr_acct__acctg_approver") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_admin_email()
  xQx = "SELECT a.email,a.email_password FROM usermanagement.users a	"
  xQx = xQx + "WHERE userId = 9										"
  
    IF SQLEXEC(conhandle,xQx,"csr_admin_email") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------


FUNCTION get_asset_specs(vAssId)
  xQx = "SELECT									"
  xQx = xQx + "  a.specsfield AS specs_field,		"
  xQx = xQx + "  a.specsvalue AS specs_value		"
  xQx = xQx + "FROM hmhs_cid.specifications a		"
  xQx = xQx + "WHERE a.assetId = ?vAssId			"
  
    IF SQLEXEC(conhandle,xQx,"csr_tmp_assetSpecs2") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION upd_acctstat_deployed(vAcctId)
  xQx = "UPDATE hmhs_cid.accountabilities SET acctStatId = 3 WHERE acctId = ?vAcctId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC



*#----- SQL Query for Accountability ------------------------
*#---
FUNCTION getInvoice(vYear)
  xQx = "SELECT a.controlNo,a.clientName,a.bustypeName,a.date_created,a.due_date,a.terms,a.remarks,a.invoiceStatId AS status,b.acctStatus,a.invoiceId AS Id,a.clientId, "
  xQx = xQx + "a.vatableSale,a.totalSales,a.vatExemptSale,a.lessVat,a.zeroRatedSale,a.discount,a.vat,a.sales,a.totalAmountDue,c.tax_status			"
  xQx = xQx + "FROM hmhs_cid.invoices a			"
  xQx = xQx + "LEFT JOIN hmhs_cid.accountabilitystatus b			"
  xQx = xQx + "ON (a.invoiceStatId=b.acctStatId)			"
  xQx = xQx + "JOIN hmhs_cid.clients c			"
  xQx = xQx + "ON (a.clientId=c.clientId)			"
  xQx = xQx + "WHERE a.isDeleted = 0						"
  xQx = xQx + "    AND YEAR(a.date_created) = ?vYear		"
  xQx = xQx + "ORDER BY a.controlNo			"
  
    IF SQLEXEC(conhandle,xQx,"csr_Invoice") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvoice_Filter(vFilter,vValue,vYear)
  xQx = "CALL hmhs_cid.filter_invoices(?vFilter,?vValue,?vYear) "
  
    IF SQLEXEC(conhandle,xQx,"csr_Invoice") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addInvoice(priv1,priv2,priv3,priv4,priv5,priv6,priv7,priv8,priv9,priv10,priv11,priv12,priv13,priv14)
  xQx = "INSERT INTO hmhs_cid.invoices("
  xQx = xQx + "invoiceStatId,clientId,clientName,clientAddress,bustypeName,controlNo,tin,osca_pwd_no,sc_tin_no,date_created,due_date,terms,remarks,salesPerson) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4,?priv5,?priv6,?priv7,?priv8,?priv9,?priv10,?priv11,?priv12,?priv13,?priv14) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updInvoice(privId,priv1,priv2,priv3,priv4,priv5,priv6,priv7,priv8,priv9,priv10,priv11,priv12,priv13,priv14,priv15)
  xQx = "UPDATE hmhs_cid.invoices "
  xQx = xQx + "SET invoiceStatId=?priv1, clientId=?priv2,  "
  xQx = xQx + "clientName=?priv3, clientAddress=?priv4, bustypeId=?priv5,  "
  xQx = xQx + "bustypeName=?priv6, controlNo=?priv7, "
  xQx = xQx + "tin=?priv8, osca_pwd_no=?priv9,  "
  xQx = xQx + "sc_tin_no=?priv10, date_created=?priv11,  "
  xQx = xQx + "due_date=?priv12, terms=?priv13,  "
  xQx = xQx + "remarks=?priv14,  "
  xQx = xQx + "salesPerson=?priv15  "
  xQx = xQx + "WHERE invoiceId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updInvoiceStatusSend(privId)
  xQx = "UPDATE hmhs_cid.invoices "
  xQx = xQx + "SET invoiceStatId=2  "
  xQx = xQx + "WHERE invoiceId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updInvoiceStatusCancel(privId)
  xQx = "UPDATE hmhs_cid.invoices "
  xQx = xQx + "SET invoiceStatId=4  "
  xQx = xQx + "WHERE invoiceId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetStatusToSold(privId)
  xQx = "UPDATE hmhs_cid.assets SET statId = 1 "
  xQx = xQx + "WHERE assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetStatusToOnStock(privId)
  xQx = "UPDATE hmhs_cid.assets SET statId = 7 "
  xQx = xQx + "WHERE assetId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updInvItemStatusToPaid(privId)
  xQx = "UPDATE hmhs_cid.invoiceitems SET STATUS = 1  "
  xQx = xQx + "WHERE invoiceId= ?privId AND isRemove = 0 "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updInvoiceStatusPaid(privId)
  xQx = "UPDATE hmhs_cid.invoices "
  xQx = xQx + "SET invoiceStatId=3  "
  xQx = xQx + "WHERE invoiceId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_Invoice(privId)
  
  xQx = "		SELECT									"
  xQx = xQx + "  a.invoiceStatId,						"
  xQx = xQx + "  a.clientId,							"
  xQx = xQx + "  a.clientName,						"
  xQx = xQx + "  a.clientAddress,						"
  xQx = xQx + "  a.bustypeId,							"
  xQx = xQx + "  a.bustypeName,						"
  xQx = xQx + "  a.controlNo,							"
  xQx = xQx + "  a.tin,								"
  xQx = xQx + "  a.osca_pwd_no,						"
  xQx = xQx + "  a.sc_tin_no,							"
  xQx = xQx + "  a.date_created,						"
  xQx = xQx + "  a.due_date,							"
  xQx = xQx + "  a.terms,								"
  xQx = xQx + "  a.remarks,							"
  xQx = xQx + "  a.salesPerson						"
  xQx = xQx + "FROM hmhs_cid.invoices a				"
  xQx = xQx + "WHERE a.invoiceId = ?privId			"
  xQx = xQx + "    AND a.isDeleted = 0				"
  
    IF SQLEXEC(conhandle,xQx,"csr_editInvoice") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delInvoice(privId)
  xQx = "UPDATE hmhs_cid.invoices SET isDeleted = 1 "
  xQx = xQx + "WHERE invoiceId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvoiceClientList(vSearch)
  
  xQx = "		SELECT a.clientName,a.address,b.busTypeName,a.tin,a.clientId AS Id FROM hmhs_cid.clients a	"
  xQx = xQx + "  LEFT JOIN hmhs_cid.businesstypes b							"
  xQx = xQx + "  ON (a.busTypeId=b.busTypeId)					"
  xQx = xQx + "  WHERE a.isDeleted = 0 AND a.isActive = 1 AND		"
  xQx = xQx + "a.clientName LIKE '%"+vSearch+"%'		"
  xQx = xQx + "ORDER BY a.clientName					"	

    IF SQLEXEC(conhandle,xQx,"csr_InvoiceClientList") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC


FUNCTION getInvoiceStatus
  xQx = "SELECT a.acctStatus,a.acctStatId as Id FROM hmhs_cid.accountabilitystatus a "
  xQx = xQx + "ORDER BY a.acctStatus "	

    IF SQLEXEC(conhandle,xQx,"csr_InvoiceStatus") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvoice_Stat(privId)
  xQx = "SELECT a.acctStatus FROM hmhs_cid.accountabilitystatus a "
  xQx = xQx + "WHERE a.acctStatId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_InvoiceStat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC
*!*		
*!*		FUNCTION getAccount_Emp(privId)
*!*			xQx = "SELECT a.fullname FROM hmhs_hrd.employees a "
*!*			xQx = xQx + "WHERE empId = ?privId "
*!*				
*!*				IF SQLEXEC(conhandle,xQx,"csr_AccountEmp") = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC
*!*		
*!*		FUNCTION getAccount_Issby(privId)
*!*			xQx = "SELECT a.fullname FROM hmhs_hrd.employees a "
*!*			xQx = xQx + "WHERE empId = ?privId "	
*!*		
*!*				IF SQLEXEC(conhandle,xQx,"csr_AccountIssby") = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC
*!*		
*!*		
*!*		
*!*		FUNCTION getAccountIssuedbyList(vSearch)
*!*			
*!*			xQx = "		SELECT									"
*!*			xQx = xQx + "  a.fullname,							"
*!*			xQx = xQx + "  c.department,						"
*!*			xQx = xQx + "  d.position,							"
*!*			xQx = xQx + " a.empId      AS Id					"
*!*			xQx = xQx + "FROM hmhs_hrd.employees a				"
*!*			xQx = xQx + "  JOIN hmhs_hrd.servicerecords b		"
*!*			xQx = xQx + "    ON (a.empId = b.empId)				"
*!*			xQx = xQx + "  JOIN hmhs_hrd.departments c			"
*!*			xQx = xQx + "    ON (b.depId = c.departmentId)		"
*!*			xQx = xQx + "  JOIN hmhs_hrd.positions d			"
*!*			xQx = xQx + "    ON (b.posId = d.positionId)		"
*!*			xQx = xQx + "WHERE b.isDisabled = 0 AND				"
*!*			xQx = xQx + "a.fullname LIKE '%"+vSearch+"%'		"
*!*			xQx = xQx + "ORDER BY a.fullname					"	
*!*		
*!*				IF SQLEXEC(conhandle,xQx,"csr_AccountIssuedbyList") = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC
*!*		
*!*		FUNCTION clrAccount(privId)
*!*			xQx = "UPDATE hmhs_cid.accountabilities "
*!*			xQx = xQx + "SET acctStatId = 2 "
*!*			xQx = xQx + "WHERE acctId = ?privId	"
*!*		
*!*				IF SQLEXEC(conhandle,xQx) = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC
*!*		
*!*		FUNCTION prntAccount(privId)
*!*			xQx = "UPDATE hmhs_cid.accountabilities "
*!*			xQx = xQx + "SET isPrinted = 1 "
*!*			xQx = xQx + "WHERE acctId = ?privId "
*!*			
*!*				IF SQLEXEC(conhandle,xQx) = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC
*!*		
*!*		FUNCTION chkLastAccountSeries(yearId)
*!*			xQx = "SELECT COALESCE(MAX(a.series_no),0) AS series "
*!*			xQx = xQx + "FROM hmhs_cid.accountabilities a "
*!*			xQx = xQx + "WHERE a.series = ?yearId AND a.isDeleted = 0 "
*!*			
*!*				IF SQLEXEC(conhandle,xQx,"csr_lastno") = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC

*#---
*#---------------------------------------------------------------


*#----- SQL Query for Stock Group Maintenance ------------------------
*#---
FUNCTION getAssetGroup()
  xQx = "SELECT a.groupName,b.categoryName,a.sellPrice,a.itemOnStock,a.itemSold,a.assetGroupId AS Id,a.isDeleted,a.maintaining FROM hmhs_cid.assetgroup a		"
  xQx = xQx + "  JOIN hmhs_cid.categories b									"
  xQx = xQx + "  ON (b.catId=a.catId)							"
  xQx = xQx + "  WHERE a.isDeleted = 0							"
  xQx = xQx + "  ORDER BY a.groupName								"

    IF SQLEXEC(conhandle,xQx,"csr_assetGroup") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAssetGroup_Filter(vFilter,vValue)
  xQx = "CALL hmhs_cid.filter_assetgroup(?vFilter,?vValue) "
  
    IF SQLEXEC(conhandle,xQx,"csr_assetGroup") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addAssetGroup
  xQx = "INSERT INTO hmhs_cid.assetgroup(catId,groupName,description,sellPrice,unit,maintaining) "
  xQx = xQx + "VALUES(?vAssetGroup_catId,?vAssetGroup_groupName,?vAssetGroup_description,?vAssetGroup_sellPrice,?vAssetGroup_unit,?vAssetGroup_maintaining) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetGroup(privId)
  xQx = "UPDATE hmhs_cid.assetgroup "
  xQx = xQx + "SET catId = ?vAssetGroup_catId,  "
  xQx = xQx + "groupName = ?vAssetGroup_groupName, "
  xQx = xQx + "description = ?vAssetGroup_description, "
  xQx = xQx + "sellPrice = ?vAssetGroup_sellPrice, "
  xQx = xQx + "unit = ?vAssetGroup_unit,  "
  xQx = xQx + "maintaining = ?vAssetGroup_maintaining  "
  xQx = xQx + "WHERE assetGroupId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_AssetGroup(privId)
  xQx = "SELECT a.groupName,a.catId,a.sellPrice,a.description,a.unit,a.assetGroupId AS Id,a.itemSold,a.itemOnStock,a.maintaining FROM hmhs_cid.assetgroup a "
  xQx = xQx + "WHERE a.assetGroupId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editAssetGroup") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delAssetGroup(privId)
  xQx = "UPDATE hmhs_cid.assetgroup "
  xQx = xQx + "SET isDeleted = 1 "
  xQx = xQx + "WHERE assetGroupId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getAsset_Category(privId)
  xQx = "SELECT a.categoryName "
  xQx = xQx + "FROM hmhs_cid.categories a "
  xQx = xQx + "WHERE a.catId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_ass_cat") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------

*#----- SQL Query for Invoice Items ------------------------
*#---
FUNCTION getInvoiceItem(privId)
  xQx = "SELECT COALESCE(CONCAT(b.code,' - ',b.assetName),a.clientName) AS item,a.invItmId AS Id,a.assetId,a.assetGroupId,a.amount,a.assetGroupId,a.quantity  "
  xQx = xQx + "FROM hmhs_cid.invoiceitems a  "
  xQx = xQx + "LEFT JOIN hmhs_cid.assets b "
  xQx = xQx + "ON (a.assetId=b.assetId) "
  xQx = xQx + "JOIN hmhs_cid.status c "
  xQx = xQx + "ON (a.status=c.statId) "
  xQx = xQx + "WHERE a.invoiceId = ?privId AND a.isRemove = 0 "
  xQx = xQx + "ORDER BY b.code "
  
    IF SQLEXEC(conhandle,xQx,"csr_InvoiceItem") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addInvoiceItem(priv1,priv2,priv3,priv4,priv5,priv6,priv7)
  xQx = "INSERT INTO hmhs_cid.invoiceitems(invoiceId,clientId,assetId,assetGroupId,clientName,amount,supId) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4,?priv5,?priv6,?priv7) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION addInvItemManual(priv1,priv2,priv3,priv4,priv5,priv6,priv7,priv8,priv9,priv10)
  xQx = "INSERT INTO hmhs_cid.invoiceitems(invoiceId,clientId,assetId,assetGroupId,clientName,amount,unit,quantity,supId,unitPrice) "
  xQx = xQx + "VALUES(?priv1,?priv2,?priv3,?priv4,?priv5,?priv6,?priv7,?priv8,?priv9,?priv10) "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updInvoiceAmount(privId,priv1,priv2,priv3,priv4,priv5,priv6,priv7,priv8,priv9)
  xQx = "UPDATE hmhs_cid.invoices "
  xQx = xQx + "SET vatableSale=?priv1, totalSales=?priv2, vatExemptSale=?priv3, "
  xQx = xQx + "lessVat=?priv4, zeroRatedSale=?priv5, discount=?priv6, "
  xQx = xQx + "vat=?priv7, sales=?priv8, totalAmountDue=?priv9 "
  xQx = xQx + "WHERE invoiceId = ?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION set_ItemOnStock(privId)
  xQx = "UPDATE hmhs_cid.assets 			"
  xQx = xQx + "SET statId = 7 			"
  xQx = xQx + "WHERE assetId = ?privId 	"
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getEdit_InvoiceItem(privId)
  xQx = "SELECT CONCAT(b.code,' - ',b.assetName) as item,a.invItmId as Id, "
  xQx = xQx + "a.assetId "
  xQx = xQx + "FROM hmhs_cid.invoiceitems a "
  xQx = xQx + "JOIN hmhs_cid.assets b "
  xQx = xQx + "ON (a.assetId=b.assetId) "
  xQx = xQx + "JOIN hmhs_cid.status c "
  xQx = xQx + "ON (a.status=c.statId) "
  xQx = xQx + "WHERE a.invItmId = ?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_editInvoiceItem") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delInvoiceItem(privId)
  xQx = "DELETE FROM hmhs_cid.invoiceitems "
  xQx = xQx + "WHERE invItmId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delget_InvoiceItem(privId)
  xQx = "SELECT a.assetId AS Id FROM hmhs_cid.invoiceitems a "
  xQx = xQx + "WHERE a.invItmId=?privId "
  
    IF SQLEXEC(conhandle,xQx,"csr_delgetInvoiceItm") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION enableAsset(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET statId = 7 "
  xQx = xQx + "WHERE assetId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION disableAsset(privId)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET statId = 2 "
  xQx = xQx + "WHERE assetId=?privId "
  
    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvoiceItm_Asset(vSearch)
  xQx = "SELECT CONCAT(a.code,' - ',a.assetName) AS item, a.assetId as Id, a.catId AS assetGroupId, b.sellPrice AS amount, a.supId FROM hmhs_cid.assets a "
  xQx = xQx + "JOIN hmhs_cid.assetgroup b ON (a.catId=b.assetGroupId) "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.statId = 7 "
  xQx = xQx + "AND CONCAT(a.code,' - ',a.assetName) LIKE '%"+vSearch+"%' "
  xQx = xQx + "ORDER BY a.code "	

    IF SQLEXEC(conhandle,xQx,"csr_InvoiceItmAsset") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvoiceItm_Asset_edit(privId)
  xQx = "SELECT DISTINCT z.item,z.Id,z.assetGroupId,z.amount,z.supId FROM ( "
  xQx = xQx + "SELECT CONCAT(a.code,' - ',a.assetName) AS item, a.assetId AS Id, a.catId AS assetGroupId, c.sellPrice AS amount, a.supId FROM hmhs_cid.assets a "
  xQx = xQx + "JOIN hmhs_cid.assetgroup c ON (a.catId=c.assetGroupId) "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.statId = 1 "
  xQx = xQx + "UNION "
  xQx = xQx + "SELECT CONCAT(b.code,' - ',b.assetName) AS item, b.assetId AS Id, a.catId AS assetGroupId, d.sellPrice AS amount, a.supId FROM hmhs_cid.assets b "
  xQx = xQx + "JOIN hmhs_cid.assetgroup d ON (b.catId=d.assetGroupId) "
  xQx = xQx + "WHERE b.assetId = ?privId ) z "
  xQx = xQx + "ORDER BY z.item "

    IF SQLEXEC(conhandle,xQx,"csr_InvoiceItmAsset") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvoiceItm_editAsset(privId)
  xQx = "SELECT CONCAT(a.code,' - ',a.assetName) AS item FROM hmhs_cid.assets a "
  xQx = xQx + "WHERE a.assetId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_edit_InvoiceItmAsset") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getInvoiceItm_editStatus(privId)
  xQx = "SELECT a.status FROM hmhs_cid.status a "
  xQx = xQx + "WHERE a.statId = ?privId "	

    IF SQLEXEC(conhandle,xQx,"csr_edit_InvoiceItmStatus") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetGroupUnitStock(privId,priv1)
  xQx = "UPDATE hmhs_cid.assetgroup "
  xQx = xQx + "SET itemOnStock = itemOnStock + ?priv1 "
  xQx = xQx + "WHERE assetGroupId = ?privId "	

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetGroupUnitStockRemove(privId,priv1)
  xQx = "UPDATE hmhs_cid.assetgroup "
  xQx = xQx + "SET itemOnStock = itemOnStock - ?priv1 "
  xQx = xQx + "WHERE assetGroupId = ?privId "	

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetGroupUnitSold(privId,priv1)
  xQx = "UPDATE hmhs_cid.assetgroup "
  xQx = xQx + "SET itemSold = itemSold + ?priv1 "
  xQx = xQx + "WHERE assetGroupId = ?privId "	

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetGroupUnitSoldRemove(privId,priv1)
  xQx = "UPDATE hmhs_cid.assetgroup "
  xQx = xQx + "SET itemSold = itemSold - ?priv1 "
  xQx = xQx + "WHERE assetGroupId = ?privId "	

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION updAssetSellPrice(privId,priv1)
  xQx = "UPDATE hmhs_cid.assets "
  xQx = xQx + "SET sellPrice = ?priv1 "
  xQx = xQx + "WHERE assetId = ?privId "	

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*!*		FUNCTION updAccountItem_Issue(privId,priv_date)
*!*			xQx = "UPDATE hmhs_cid.accountitems "
*!*			xQx = xQx + "SET date_issued=?priv_date "
*!*			xQx = xQx + "WHERE acctId = ?privId "
*!*			
*!*				IF SQLEXEC(conhandle,xQx) = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC
*!*		
*!*		FUNCTION updAccount_Issue(privId,priv_issby,priv_issname,priv_date)
*!*			xQx = "UPDATE hmhs_cid.accountabilities "
*!*			xQx = xQx + "SET issued_by=?priv_issby, issued_name=?priv_issname, issued_date=?priv_date "
*!*			xQx = xQx + "WHERE acctId = ?privId "
*!*			
*!*				IF SQLEXEC(conhandle,xQx) = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC
*!*		


FUNCTION getSalt(uName)
  xQx = "SELECT a.salt,a.userId FROM usermanagement.passwords a "
  xQx = xQx + "JOIN usermanagement.users b "
  xQx = xQx + "ON(a.userId=b.userId) "
  xQx = xQx + "WHERE b.username= ?uName "
  
    IF SQLEXEC(conhandle,xQx,"csr_Salt") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC   

FUNCTION login(uId,uPass,uSalt)
  x = ALLTRIM(uPass+uSalt)
  xQx = "SELECT a.userId,a.username FROM usermanagement.users a "
  xQx = xQx + "JOIN usermanagement.passwords b "
  xQx = xQx + "ON (a.userId=b.userId) "
  xQx = xQx + "WHERE a.userId = ?uId AND b.passwords = SHA1(?x) "
  
    IF SQLEXEC(conhandle,xQx,"csr_Login") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION UserCredential(uId)
  xQx = "SELECT a.userId,a.fullname,a.empId,a.username,a.access FROM usermanagement.users a "
  xQx = xQx + "WHERE a.userId = ?uId "
  
    IF SQLEXEC(conhandle,xQx,"csr_UserCredential") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION checkUser(vUser)
  xQx = "SELECT a.userId FROM usermanagement.users a "
  xQx = xQx + "WHERE a.username = ?vUser "

    IF SQLEXEC(conhandle,xQx,"csr_ChkUser") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC


FUNCTION addUser(vEmp,vUser,vPassword,sSalt,vFullname,vAccess)
  xQx = "INSERT INTO usermanagement.users("
  xQx = xQx + "empId,username,fullname,access) "
  xQx = xQx + "VALUES(?vEmp,?vUser,?vFullname,?vAccess) " 

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
  addPassword(vPassword,sSalt)
ENDFUNC

FUNCTION addPassword(vPassword,sSalt)
  xQx = "SELECT last_insert_id() as a"
    IF SQLEXEC(conHandle,xQx,"csr_lastInsert") = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF

  SELECT csr_lastInsert
  x = ALLTRIM(vPassword+sSalt) 
  xQx = "INSERT INTO usermanagement.passwords("
  xQx = xQx + "userId,passwords,salt) "
  xQx = xQx + "VALUES(?csr_lastInsert.a,SHA1(?x),?sSalt) "

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION delUser(uId)
  xQx = "UPDATE usermanagement.users SET isDeleted = 1 "
  xQx = xQx + "WHERE userId = ?uId "

    IF SQLEXEC(conHandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_editUser(uId)
  xQx = "SELECT a.username,a.isActive,a.fullname,a.access FROM usermanagement.users a "
  xQx = xQx + "WHERE a.userId = ?uId "
  
    IF SQLEXEC(conHandle,xQx,"csr_editUser") = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC

FUNCTION updUser(uId,uName,uisActive,ufullname,uaccess)
  xQx = "UPDATE usermanagement.users SET "
  xQx = xQx + "username = ?uName, isActive = ?uisActive, fullname = ?ufullname, access = ?uaccess "
  xQx = xQx + "WHERE userId = ?uId "
  
    IF SQLEXEC(conHandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC

FUNCTION get_editPassword(uId)
  xQx = "SELECT b.username FROM usermanagement.passwords a "
  xQx = xQx + "JOIN usermanagement.users b "
  xQx = xQx + "ON (a.userId=b.userId) "
  xQx = xQx + "WHERE a.userId = ?uId "
  
    IF SQLEXEC(conHandle,xQx,"csr_editPass") = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC

FUNCTION updResetPassword(uId,uPass,uSalt)
  x = ALLTRIM(uPass+uSalt)
  xQx = "UPDATE usermanagement.passwords SET "
  xQx = xQx + "passwords = SHA1(?x) "
  xQx = xQx + "WHERE userId = ?uId "

    IF SQLEXEC(conhandle,xQx) = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getUsers
  xQx = "SELECT a.username,a.userId FROM usermanagement.users a "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.userId != 9 "
  xQx = xQx + "ORDER BY a.username "

    IF SQLEXEC(conHandle,xQx,"csr_Users") = -1
      MESSAGEBOX(MESSAGE(),16)
      RETURN
    ENDIF
ENDFUNC

FUNCTION getLogs
  xQx = "SELECT a.logDate,b.fullname,a.affected_table,a.actions,a.activity "
  xQx = xQx + "FROM utilities.audit_logs a			"
  xQx = xQx + "JOIN usermanagement.users b			"
  xQx = xQx + "ON (a.userId=b.userId)			"
  xQx = xQx + "ORDER BY a.logId DESC 			"
  
    IF SQLEXEC(conhandle,xQx,"csr_Logs") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION getLogs_Filter(vFilter,vValue)
  xQx = "CALL hmhs_cid.filter_logs(?vFilter,?vValue) "
  
    IF SQLEXEC(conhandle,xQx,"csr_Logs") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*#---
*#---------------------------------------------------------------


*#----- SQL Query for Reports ------------------------
*#---

FUNCTION repSalesInvoiceMonthly(vDateStart,vDateEnd)
  xQx = "SELECT a.controlNo,a.date_created,a.clientName,a.bustypeName,a.salesPerson,b.acctStatus,a.terms,a.vat,a.discount,a.totalAmountDue "
  xQx = xQx + "FROM hmhs_cid.invoices a			"
  xQx = xQx + "JOIN hmhs_cid.accountabilitystatus b			"
  xQx = xQx + "ON (a.invoiceStatId=b.acctStatId)	"
  xQx = xQx + "WHERE a.date_created >= ?vDateStart AND a.date_created <= ?vDateEnd "
  xQx = xQx + "ORDER BY a.controlNo "
  
    IF SQLEXEC(conhandle,xQx,"csr_repSalesInvoiceMonthly") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

*!*		FUNCTION rep_masterlist_excel(vSort)
*!*			xQx = "SELECT		"
*!*			xQx = xQx + "   a.code,a.assetName,a.brand,a.model,a.serialNumber,b.supName,c.groupName,d.status,a.date_purchased,a.unitPrice "
*!*			xQx = xQx + "FROM hmhs_cid.assets a "
*!*			xQx = xQx + "  JOIN hmhs_cid.suppliers b "
*!*			xQx = xQx + "    ON (a.supId=b.supId) "
*!*			xQx = xQx + "  JOIN hmhs_cid.assetgroup c "
*!*			xQx = xQx + "    ON (a.catId=c.assetGroupId) "
*!*			xQx = xQx + "  JOIN hmhs_cid.status d "
*!*			xQx = xQx + "    ON (a.statId=d.statId) "
*!*			xQx = xQx + "WHERE a.isDeleted = 0 "
*!*			xQx = xQx + "ORDER BY "
*!*			xQx = xQx + vSort

*!*				IF SQLEXEC(conhandle,xQx,"csr_print_masterlist_excel") = -1
*!*					MESSAGEBOX(MESSAGE(),16,"SQL error")
*!*					RETURN
*!*				ENDIF
*!*		ENDFUNC

FUNCTION rep_clients_masterlist_excel
  xQx = "SELECT		"
  xQx = xQx + "   a.clientName,a.address,b.busTypeName,a.contactPerson,a.telno,a.mobileno,a.faxno,a.email,a.tin,a.tax_status "
  xQx = xQx + "FROM hmhs_cid.clients a "
  xQx = xQx + "  JOIN hmhs_cid.businesstypes b "
  xQx = xQx + "    ON (a.busTypeId=b.busTypeId) "
  xQx = xQx + "WHERE a.isDeleted = 0 "
  xQx = xQx + "ORDER BY a.clientName "

    IF SQLEXEC(conhandle,xQx,"csr_rep_clients_masterlist_excel") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC

FUNCTION rep_suppliers_masterlist_excel
  xQx = "SELECT		"
  xQx = xQx + "   a.supName,b.busTypeName,a.address,a.contactPerson,a.telno,a.faxno,a.email "
  xQx = xQx + "FROM hmhs_cid.suppliers a "
  xQx = xQx + "  JOIN hmhs_cid.businesstypes b "
  xQx = xQx + "    ON (a.busTypeId=b.busTypeId) "
  xQx = xQx + "WHERE a.isDeleted = 0 AND a.supName != '' "
  xQx = xQx + "ORDER BY a.supName "

    IF SQLEXEC(conhandle,xQx,"csr_rep_suppliers_masterlist_excel") = -1
      MESSAGEBOX(MESSAGE(),16,"SQL error")
      RETURN
    ENDIF
ENDFUNC







?>