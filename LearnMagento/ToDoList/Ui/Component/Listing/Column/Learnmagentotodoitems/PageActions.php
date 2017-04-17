<?php
namespace LearnMagento\ToDoList\Ui\Component\Listing\Column\Learnmagentotodoitems;

class PageActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource["data"]["items"])) {
            foreach ($dataSource["data"]["items"] as & $item) {
                $name = $this->getData("name");
                $id = "X";
                if(isset($item["learnmagento_todolist_todoitem_id"]))
                {
                    $id = $item["learnmagento_todolist_todoitem_id"];
                }
                $item[$name]["view"] = [
                    "href"=>$this->getContext()->getUrl(
                        "todolist/item/edit",["learnmagento_todolist_todoitem_id"=>$id]),
                    "label"=>__("Edit")
                ];
            }
        }

        return $dataSource;
    }    
    
}
