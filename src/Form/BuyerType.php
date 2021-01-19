<?php

namespace App\Form;

use App\Entity\BDate;
use App\Entity\BoxDeformed;
use App\Entity\Buyer;
use App\Entity\CourierCloth;
use App\Entity\CourierContact;
use App\Entity\CourierEnd;
use App\Entity\CourierMask;
use App\Entity\CourierTime;
use App\Entity\Milks;
use App\Entity\Plants;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BuyerType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code', TextType::class, array(
                'label' => 'Код-приглашение из СМС'
            ))
            ->add('number', TextType::class, array(
                'label' => 'Номер заказа',
                'attr' => [
                    'minlength' => '6',
                    'maxlength' => '6',
                ]
            ))
            ->add('name', TextType::class, array(
                'label' => 'ФИО',
                'attr' => [
                    'minlength' => '2',
                ]
            ))
            ->add('telefone', TextType::class, array(
                'label' => 'Телефон',  
                'attr' => [
                    'minlength' => '16',
                    'maxlength' => '16',
                ]              
            ))
            ->add('courier_file', FileType::class, array(
                'label' => 'Приложите фото курьера',
                'required' => true,
                'mapped' => false,
                'attr' => [
                    'class' => 'inputfile',
                    'data-for' => 'file-1'
                ]
            ))
            ->add('courier_end_text', TextareaType::class, array(
                'label' => false
            ))
            ->add('box_foto', FileType::class, array(
                'label' => 'Приложите фото пакетов с товаром',
                'required' => true,
                'mapped' => false,
                'attr' => [
                    'class' => 'inputfile',
                    'data-for' => 'file-2'
                ]
            ))
            ->add('box_deformed_foto', FileType::class, array(
                'label' => false,
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'inputfile',
                    'data-for' => 'file-3'
                ]
            ))
            ->add('plants_foto', FileType::class, array(
                'label' => false,
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'inputfile',
                    'data-for' => 'file-4'
                ]
            ))
            ->add('milks_text', TextareaType::class, array(
                'label' => false
                ))
            ->add('milks_foto', FileType::class, array(
                'label' => false,
                'required' => false,
                'mapped' => false,
                'attr' => [
                    'class' => 'inputfile',
                    'data-for' => 'file-5'
                ]
            ))
            ->add('what_like', TextareaType::class, array(
                'label' => 'Расскажите, что понравилось',
                'required' => false,
                'attr' => [
                    'cols' => '30',
                    'rows' => '6',
                ] 
                ))
            ->add('what_dislike', TextareaType::class, array(
                'label' => 'Расскажите, что не понравилось',
                'required' => false,
                'attr' => [
                    'cols' => '30',
                    'rows' => '6',
                ]
                ))
            ->add('other', TextareaType::class, array(
                'label' => 'Другие комментарии',
                'required' => false,
                'attr' => [
                    'cols' => '30',
                    'rows' => '6',
                ]
                ))
            ->add('courier_time', EntityType::class, array(
                'label' => 'Время курьера',
                'placeholder' => '',
                'class' => CourierTime::class,
            ))
            ->add('courier_cloth', EntityType::class, array(
                'label' => 'Курьер был в спец одежде?',
                'placeholder' => '',
                'class' => CourierCloth::class,
            ))
            ->add('courier_mask', EntityType::class, array(
                'label' => 'Курьер был в маске?',
                'placeholder' => '',
                'class' => CourierMask::class,
            ))
            ->add('courier_contact', EntityType::class, array(
                'label' => 'Курьер передал заказ бесконтактно?',
                'placeholder' => '',
                'class' => CourierContact::class,
            ))
            ->add('courier_end', EntityType::class, array(
                'label' => 'Курьер попросил расписаться и завершил заказ при вас?',
                'placeholder' => '',
                'class' => CourierEnd::class,
                'choice_value' => function (CourierEnd $courierend = null) {
                    return  $courierend  ?  $courierend -> getValue ()  :  '' ; 
                }
            ))
            ->add('box_deformed', EntityType::class, array(
                'label' => 'Упаковка товаров не деформирована',
                'placeholder' => '',
                'class' => BoxDeformed::class,
                'choice_value' => function (BoxDeformed $boxdeformed = null) {
                    return  $boxdeformed  ?  $boxdeformed -> getValue ()  :  '' ; 
                }
            ))
            ->add('box_date', EntityType::class, array(
                'label' => 'Сроки годности продуктов',
                'placeholder' => '',
                'class' => BDate::class,
            ))
            ->add('plants', EntityType::class, array(
                'label' => 'Овощи / фрукты',
                'placeholder' => '',
                'class' => Plants::class,
                'choice_value' => function (Plants $plants = null) {
                    return  $plants  ?  $plants -> getValue ()  :  '' ; 
                }
            ))
            ->add('milks', EntityType::class, array(
                'label' => 'Молочные продукты / сыры / яйца',
                'placeholder' => '',
                'class' => Milks::class,
                'choice_value' => function (Milks $milks = null) {
                    return  $milks  ?  $milks -> getValue ()  :  '' ; 
                }
            ))
            ->add('submit', SubmitType::class, array(
                'label' => 'Отправить отчет',
                'attr' => [
                    'class' => 'submit'
                ]
            ));
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Buyer::class,
        ]);
    }
}
