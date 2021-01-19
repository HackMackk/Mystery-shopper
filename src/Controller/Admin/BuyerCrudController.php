<?php

namespace App\Controller\Admin;

use App\Entity\Buyer;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\FormField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class BuyerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Buyer::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('code', 'Код смс'),
            TextField::new('number', 'Номер заказа'),
            TextField::new('name', 'ФИО'),
            TextField::new('telefone', 'Телефон'),
            FormField::addPanel('О курьере'),
            ImageField::new('courier_file', 'Фото курьера')->setBasePath('/uploads/img'),
            TextField::new('courier_time', 'Вермя курьера')->onlyOnDetail(),
            TextField::new('courier_cloth', 'Одежда курьера')->onlyOnDetail(),
            TextField::new('courier_mask', 'Курьер в маске?')->onlyOnDetail(),
            TextField::new('courier_contact', 'Бесконтактная доставка')->onlyOnDetail(),
            TextField::new('courier_end', 'Курьер попросил расписаться и завершил заказ при вас?')->onlyOnDetail(),
            TextareaField::new('courier_end_text', 'если не завершил заказ при клиенте')->onlyOnDetail(),
            FormField::addPanel('О Заказе'),
            ImageField::new('box_foto', 'Фото пакетов с товаром')->setBasePath('/uploads/img')->onlyOnDetail(),
            TextField::new('box_deformed', 'Упаковка товаров не деформирована')->onlyOnDetail(),
            ImageField::new('box_deformed_foto', 'Фото деформированного товара')->setBasePath('/uploads/img')->onlyOnDetail(),
            TextField::new('box_date', 'Сроки годности продуктов')->onlyOnDetail(),
            TextField::new('plants', 'Овощи / фрукты')->onlyOnDetail(),
            ImageField::new('plants_foto', 'Фото овощей')->setBasePath('/uploads/img')->onlyOnDetail(),
            TextField::new('milks', 'Молочные продукты / сыры / яйца')->onlyOnDetail(),
            TextareaField::new('milks_text', 'если не понравилось')->onlyOnDetail(),
            ImageField::new('milks_foto', 'если большие проблемы')->setBasePath('/uploads/img')->onlyOnDetail(),
            TextareaField::new('what_like', 'Что понравилось')->onlyOnDetail(),
            TextareaField::new('what_dislike', 'Что не понравилось')->onlyOnDetail(),
            TextareaField::new('other', 'Другие комментарии')->onlyOnDetail(),

        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->add(Crud::PAGE_INDEX, Action::DETAIL)
            ->remove(Crud::PAGE_INDEX, Action::NEW)
            ->remove(Crud::PAGE_INDEX, Action::EDIT)
            ->remove(Crud::PAGE_DETAIL, Action::EDIT, Action::DELETE,Action::INDEX)
        ;
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Отчеты покупателей')
            ->setEntityLabelInPlural('Отчеты покупателей')
        ;
    }
}
