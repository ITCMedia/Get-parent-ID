<?
// Для того, чтобы получить родительскую группу в ТДС, необходимо объявить новый объект $oInformationsystem_Group, который и будет содержать всю информацию по группам. 
$oInformationsystem_Group = Core_Entity::factory('Informationsystem_Group', $Informationsystem_Controller_Show->group);
// Вывод групп фоторепортажа
if ($oInformationsystem_Group->parent_id == 231) // Тут указать требуемый ID родительской группы
{
	$Informationsystem_Controller_Show
		->xsl(
		Core_Entity::factory('Xsl')->getByName("СписокЭлементовИнфосистемыФоторепортаж")
	)
		->itemsProperties(TRUE)
		->groupsProperties(TRUE)
		->show();
}
// Вывод всего остального в ИС
if ($oInformationsystem_Group->parent_id != 231)
{

	$Informationsystem_Controller_Show
		->xsl(
		Core_Entity::factory('Xsl')->getByName($xslName)
	)
		->itemsProperties(TRUE)
		->show();
}
