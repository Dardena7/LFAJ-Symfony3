<?php

namespace OC\PlatformBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Image;
use OC\PlatformBundle\Entity\Category;
use OC\PlatformBundle\Entity\Skill;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\AdvertSkill;
use OC\UserBundle\Entity\User;
use Symfony\Component\Console\Tester\ApplicationTester;

class LoadAdvert implements FixtureInterface
{
  public function load(ObjectManager $manager)
  {
    //Load Categories
    $category1 = new Category();
    $category2 = new Category();
    $category3 = new Category();
    $category4 = new Category();
    $category5 = new Category();

    $category1->setName('Web development');
    $category2->setName('Mobile development');
    $category3->setName('Design');
    $category4->setName('Front-end development');
    $category5->setName('Network');

    $manager->persist($category1);
    $manager->persist($category2);
    $manager->persist($category3);
    $manager->persist($category4);
    $manager->persist($category5);

    //Load skills
    /*
    $skill1 = new Skill();
    $skill2 = new Skill();
    $skill3 = new Skill();
    $skill4 = new Skill();
    $skill5 = new Skill();

    $skill1->setName('PHP');
    $skill2->setName('Symfony');
    $skill3->setName('C++');
    $skill4->setName('Java');
    $skill5->setName('Photoshop');

    $manager->persist($skill1);
    $manager->persist($skill2);
    $manager->persist($skill3);
    $manager->persist($skill4);
    $manager->persist($skill5);
    */


    //Prepare images
    $image1 = new Image();
    $image2 = new Image();
    $image3 = new Image();
    $image4 = new Image();
    $image5 = new Image();
    $image6 = new Image();
    $image7 = new Image();
    $image8 = new Image();
    $image9 = new Image();
    $image10 = new Image();
    $image11 = new Image();
    $image12 = new Image();
    $image13 = new Image();
    $image14 = new Image();
    $image15 = new Image();
    $image16 = new Image();
    $image17 = new Image();
    $image18 = new Image();
    $image19 = new Image();
    $image20 = new Image();

    $image1->setUrl('https://cdn.lynda.com/course/520220/520220-636136853521823826-16x9.jpg');
    $image2->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image3->setUrl('http://developnig.com/wp-content/uploads/2017/03/Developmental23Initiatives.jpg');
    $image4->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image5->setUrl('https://cdn.lynda.com/course/520220/520220-636136853521823826-16x9.jpg');
    $image6->setUrl('http://developnig.com/wp-content/uploads/2017/03/Developmental23Initiatives.jpg');
    $image7->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image8->setUrl('http://blogs.worldbank.org/files/education/step3.jpg');
    $image9->setUrl('http://developnig.com/wp-content/uploads/2017/03/Developmental23Initiatives.jpg');
    $image10->setUrl('https://cdn.lynda.com/course/520220/520220-636136853521823826-16x9.jpg');
    $image11->setUrl('https://pbs.twimg.com/profile_images/880067802316623873/45id8G7J_400x400.jpg');
    $image12->setUrl('https://filecache.mediaroom.com/mr5mr_ibmnews/179009/IBM%20logo.jpg');
    $image13->setUrl('https://pbs.twimg.com/profile_images/875616952340815872/nnhhtjyc_400x400.jpg');
    $image14->setUrl('https://support.apple.com/content/dam/edam/applecare/images/en_US/osx/featured-content-apple-icon_2x.png');
    $image15->setUrl('https://upload.wikimedia.org/wikipedia/commons/thumb/a/a5/Google_Chrome_icon_%28September_2014%29.svg/768px-Google_Chrome_icon_%28September_2014%29.svg.png');
    $image16->setUrl('https://metrouk2.files.wordpress.com/2018/08/gettyimages-1016007038-e1534858632383.jpg?quality=80&strip=all&zoom=1&resize=644%2C479');
    $image17->setUrl('https://talksport.com/wp-content/uploads/sites/5/2018/07/HENRY2.jpg?strip=all&w=960&quality=100');
    $image19->setUrl('https://media.gettyimages.com/photos/sport-football-fifa-world-cup-stuttgart-13th-june-2006-france-0-v-0-picture-id78974111');
    $image20->setUrl('https://imagesvc.timeincapp.com/v3/mm/image?url=https%3A%2F%2Fpeopledotcom.files.wordpress.com%2F2018%2F08%2Fdie-hard-3-2000.jpg%3Fw%3D450&w=700&c=sc&poi=face&q=85');

    $image1->setAlt('image-alt');
    $image2->setAlt('image-alt');
    $image3->setAlt('image-alt');
    $image4->setAlt('image-alt');
    $image5->setAlt('image-alt');
    $image6->setAlt('image-alt');
    $image7->setAlt('image-alt');
    $image8->setAlt('image-alt');
    $image9->setAlt('image-alt');
    $image10->setAlt('image-alt');
    $image11->setAlt('image-alt');
    $image12->setAlt('image-alt');
    $image13->setAlt('image-alt');
    $image14->setAlt('image-alt');
    $image15->setAlt('image-alt');
    $image16->setAlt('image-alt');
    $image17->setAlt('image-alt');
    $image18->setAlt('image-alt');
    $image19->setAlt('image-alt');
    $image20->setAlt('image-alt');

    $image1->setExample(true);
    $image2->setExample(true);
    $image3->setExample(true);
    $image4->setExample(true);
    $image5->setExample(true);
    $image6->setExample(true);
    $image7->setExample(true);
    $image8->setExample(true);
    $image9->setExample(true);
    $image10->setExample(true);
    $image11->setExample(true);
    $image12->setExample(true);
    $image13->setExample(true);
    $image14->setExample(true);
    $image15->setExample(true);
    $image16->setExample(true);
    $image17->setExample(true);
    $image18->setExample(true);
    $image19->setExample(true);
    $image20->setExample(true);

    //Load User
    $user1 = new User();
    $user2 = new User();
    $user3 = new User();
    $user4 = new User();
    $user5 = new User();
    $user6 = new User();
    $user7 = new User();
    $user8 = new User();
    $user9 = new User();
    $user10 = new User();

    $user1->setUsername("Trane");
    $user2->setUsername("IBM");
    $user3->setUsername("Microsoft");
    $user4->setUsername("Apple");
    $user5->setUsername("Google");
    $user6->setUsername("Alexis");
    $user7->setUsername("Thierry");
    $user8->setUsername("Sarah");
    $user9->setUsername("Sylvain");
    $user10->setUsername("Bruce");

    $user1->setEmail("Trane@gmail.com");
    $user2->setEmail("ibm@gmail.com");
    $user3->setEmail("microsoft@gmail.com");
    $user4->setEmail("apple@gmail.com");
    $user5->setEmail("google@gmail.com");
    $user6->setEmail("alexis@gmail.com");
    $user7->setEmail("thierry@gmail.com");
    $user8->setEmail("sarah@gmail.com");
    $user9->setEmail("sylvain@gmail.com");
    $user10->setEmail("bruce@gmail.com");

    $user1->setPassword("helloworld");
    $user2->setPassword("helloworld");
    $user3->setPassword("helloworld");
    $user4->setPassword("helloworld");
    $user5->setPassword("helloworld");
    $user6->setPassword("helloworld");
    $user7->setPassword("helloworld");
    $user8->setPassword("helloworld");
    $user9->setPassword("helloworld");
    $user10->setPassword("helloworld");

    $user1->setImage($image11);
    $user2->setImage($image12);
    $user3->setImage($image13);
    $user4->setImage($image14);
    $user5->setImage($image15);
    $user6->setImage($image16);
    $user7->setImage($image17);
    $user9->setImage($image19);
    $user10->setImage($image20);

    $manager->persist($user1);
    $manager->persist($user2);
    $manager->persist($user3);
    $manager->persist($user4);
    $manager->persist($user5);
    $manager->persist($user6);
    $manager->persist($user7);
    $manager->persist($user8);
    $manager->persist($user9);
    $manager->persist($user10);

    //Load AdvertSkill
    $advert1 = new Advert();
    $advert2 = new Advert();
    $advert3 = new Advert();
    $advert4 = new Advert();
    $advert5 = new Advert();
    $advert6 = new Advert();
    $advert7 = new Advert();
    $advert8 = new Advert();
    $advert9 = new Advert();
    $advert10 = new Advert();

    $advert1->setTitle('Développeur php Senior');
    $advert2->setTitle('Webdesigner/Intégrateur');
    $advert3->setTitle('Développeur junior motivé');
    $advert4->setTitle('Infographiste');
    $advert5->setTitle('Gestionnaire de réseau');
    $advert6->setTitle('Helpdesk autonome');
    $advert7->setTitle('Développeur front-end');
    $advert8->setTitle('Dev Nodejs/socket.io');
    $advert9->setTitle('Dev java medior');
    $advert10->setTitle('Software developer');

    $advert1->setAuthor($user1);
    $advert2->setAuthor($user1);
    $advert3->setAuthor($user2);
    $advert4->setAuthor($user2);
    $advert5->setAuthor($user2);
    $advert6->setAuthor($user3);
    $advert7->setAuthor($user4);
    $advert8->setAuthor($user4);
    $advert9->setAuthor($user5);
    $advert10->setAuthor($user5);

    $advert1->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert2->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert3->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert4->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert5->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert6->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert7->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert8->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert9->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');
    $advert10->setContent('Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino, humanissimo atque optimo adulescenti meo necessario, ignosco, qui habet excusationem vel pietatis vel necessitatis vel aetatis. Si voluit accusare, pietati tribuo, si iussus est, necessitati, si speravit aliquid, pueritiae. Ceteris non modo nihil ignoscendum, sed etiam acriter est resistendum.');

    $advert1->setImage($image1);
    $advert2->setImage($image2);
    $advert3->setImage($image3);
    $advert4->setImage($image4);
    $advert5->setImage($image5);
    $advert6->setImage($image6);
    $advert7->setImage($image7);
    $advert8->setImage($image8);
    $advert9->setImage($image9);
    $advert10->setImage($image10);

    $advert1->addCategory($category1);
    $advert2->addCategory($category1);
    $advert3->addCategory($category1);
    $advert4->addCategory($category3);
    $advert5->addCategory($category4);
    $advert6->addCategory($category4);
    $advert7->addCategory($category5);
    $advert8->addCategory($category2);
    $advert9->addCategory($category2);
    $advert10->addCategory($category1);

    $advert1->addCategory($category2);
    $advert2->addCategory($category2);
    $advert3->addCategory($category3);
    $advert4->addCategory($category5);
    $advert5->addCategory($category1);
    $advert7->addCategory($category1);
    $advert8->addCategory($category5);
    $advert10->addCategory($category4);

    $advert1->addCategory($category5);
    $advert2->addCategory($category4);
    $advert3->addCategory($category5);
    $advert10->addCategory($category3);

    $manager->persist($advert1);
    $manager->persist($advert2);
    $manager->persist($advert3);
    $manager->persist($advert4);
    $manager->persist($advert5);
    $manager->persist($advert6);
    $manager->persist($advert7);
    $manager->persist($advert8);
    $manager->persist($advert9);
    $manager->persist($advert10);

    //Load applications

    $application1 = new Application();
    $application2 = new Application();
    $application3 = new Application();
    $application4 = new Application();
    $application5 = new Application();
    $application6 = new Application();
    $application7 = new Application();
    $application8 = new Application();
    $application9 = new Application();
    $application10 = new Application();
    $application11 = new Application();
    $application12 = new Application();
    $application13 = new Application();
    $application14 = new Application();
    $application15 = new Application();

    $application1->setAuthor($user6);
    $application2->setAuthor($user7);
    $application3->setAuthor($user8);
    $application4->setAuthor($user9);
    $application5->setAuthor($user9);
    $application6->setAuthor($user10);
    $application7->setAuthor($user7);
    $application8->setAuthor($user6);
    $application9->setAuthor($user8);
    $application10->setAuthor($user9);
    $application11->setAuthor($user10);
    $application12->setAuthor($user7);
    $application13->setAuthor($user8);
    $application14->setAuthor($user10);
    $application15->setAuthor($user6);

    $application1->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application2->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application3->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application4->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application5->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application6->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application7->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application8->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application9->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application10->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application11->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application12->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application13->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application14->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');
    $application15->setContent('Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles, mais s\'est aussi adapté à la bureautique informatique, sans que son contenu n\'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.');

    $application1->setAdvert($advert1);
    $application2->setAdvert($advert1);
    $application3->setAdvert($advert1);
    $application4->setAdvert($advert3);
    $application5->setAdvert($advert4);
    $application6->setAdvert($advert4);
    $application7->setAdvert($advert6);
    $application8->setAdvert($advert7);
    $application9->setAdvert($advert7);
    $application10->setAdvert($advert7);
    $application11->setAdvert($advert7);
    $application12->setAdvert($advert8);
    $application13->setAdvert($advert8);
    $application14->setAdvert($advert8);
    $application15->setAdvert($advert9);


    $manager->persist($application1);
    $manager->persist($application2);
    $manager->persist($application3);
    $manager->persist($application4);
    $manager->persist($application5);
    $manager->persist($application6);
    $manager->persist($application7);
    $manager->persist($application8);
    $manager->persist($application9);
    $manager->persist($application10);
    $manager->persist($application11);
    $manager->persist($application12);
    $manager->persist($application13);
    $manager->persist($application14);
    $manager->persist($application15);

    //Load advertSkills
    /*
    $advertSkill1 = new AdvertSkill();
    $advertSkill2 = new AdvertSkill();
    $advertSkill3 = new AdvertSkill();
    $advertSkill4 = new AdvertSkill();
    $advertSkill5 = new AdvertSkill();
    $advertSkill6 = new AdvertSkill();
    $advertSkill7 = new AdvertSkill();
    $advertSkill8 = new AdvertSkill();
    $advertSkill9 = new AdvertSkill();
    $advertSkill10 = new AdvertSkill();
    $advertSkill11 = new AdvertSkill();
    $advertSkill12 = new AdvertSkill();
    $advertSkill13 = new AdvertSkill();
    $advertSkill14 = new AdvertSkill();
    $advertSkill15 = new AdvertSkill();
    $advertSkill16 = new AdvertSkill();
    $advertSkill17 = new AdvertSkill();
    $advertSkill18 = new AdvertSkill();
    $advertSkill19 = new AdvertSkill();
    $advertSkill20 = new AdvertSkill();

    $advertSkill1->setLevel('medium');
    $advertSkill2->setLevel('expert');
    $advertSkill3->setLevel('novice');
    $advertSkill4->setLevel('expert');
    $advertSkill5->setLevel('novice');
    $advertSkill6->setLevel('expert');
    $advertSkill7->setLevel('medium');
    $advertSkill8->setLevel('medium');
    $advertSkill9->setLevel('expert');
    $advertSkill10->setLevel('novice');
    $advertSkill11->setLevel('medium');
    $advertSkill12->setLevel('expert');
    $advertSkill13->setLevel('novice');
    $advertSkill14->setLevel('expert');
    $advertSkill15->setLevel('novice');
    $advertSkill16->setLevel('medium');
    $advertSkill17->setLevel('expert');
    $advertSkill18->setLevel('novice');
    $advertSkill19->setLevel('medium');
    $advertSkill20->setLevel('medium');

    $advertSkill1->setLevel('medium');
    $advertSkill2->setLevel('expert');
    $advertSkill3->setLevel('novice');
    $advertSkill4->setLevel('expert');
    $advertSkill5->setLevel('novice');
    $advertSkill6->setLevel('expert');
    $advertSkill7->setLevel('medium');
    $advertSkill8->setLevel('medium');
    $advertSkill9->setLevel('expert');
    $advertSkill10->setLevel('novice');
    $advertSkill11->setLevel('medium');
    $advertSkill12->setLevel('expert');
    $advertSkill13->setLevel('novice');
    $advertSkill14->setLevel('expert');
    $advertSkill15->setLevel('novice');
    $advertSkill16->setLevel('medium');
    $advertSkill17->setLevel('expert');
    $advertSkill18->setLevel('novice');
    $advertSkill19->setLevel('medium');
    $advertSkill20->setLevel('medium');

    $advertSkill1->setAdvert($advert1);
    $advertSkill2->setAdvert($advert1);
    $advertSkill3->setAdvert($advert2);
    $advertSkill4->setAdvert($advert3);
    $advertSkill5->setAdvert($advert3);
    $advertSkill6->setAdvert($advert3);
    $advertSkill7->setAdvert($advert4);
    $advertSkill8->setAdvert($advert4);
    $advertSkill9->setAdvert($advert6);
    $advertSkill10->setAdvert($advert6);
    $advertSkill11->setAdvert($advert6);
    $advertSkill12->setAdvert($advert7);
    $advertSkill13->setAdvert($advert8);
    $advertSkill14->setAdvert($advert8);
    $advertSkill15->setAdvert($advert8);
    $advertSkill16->setAdvert($advert9);
    $advertSkill17->setAdvert($advert9);
    $advertSkill18->setAdvert($advert10);
    $advertSkill19->setAdvert($advert10);
    $advertSkill20->setAdvert($advert10);

    $advertSkill1->setSkill($skill1);
    $advertSkill2->setSkill($skill2);
    $advertSkill3->setSkill($skill1);
    $advertSkill4->setSkill($skill3);
    $advertSkill5->setSkill($skill4);
    $advertSkill6->setSkill($skill5);
    $advertSkill7->setSkill($skill1);
    $advertSkill8->setSkill($skill5);
    $advertSkill9->setSkill($skill1);
    $advertSkill10->setSkill($skill2);
    $advertSkill11->setSkill($skill4);
    $advertSkill12->setSkill($skill4);
    $advertSkill13->setSkill($skill2);
    $advertSkill14->setSkill($skill4);
    $advertSkill15->setSkill($skill5);
    $advertSkill16->setSkill($skill1);
    $advertSkill17->setSkill($skill3);
    $advertSkill18->setSkill($skill2);
    $advertSkill19->setSkill($skill3);
    $advertSkill20->setSkill($skill5);

    $manager->persist($advertSkill1);
    $manager->persist($advertSkill2);
    $manager->persist($advertSkill3);
    $manager->persist($advertSkill4);
    $manager->persist($advertSkill5);
    $manager->persist($advertSkill6);
    $manager->persist($advertSkill7);
    $manager->persist($advertSkill8);
    $manager->persist($advertSkill9);
    $manager->persist($advertSkill10);
    $manager->persist($advertSkill11);
    $manager->persist($advertSkill12);
    $manager->persist($advertSkill13);
    $manager->persist($advertSkill14);
    $manager->persist($advertSkill15);
    $manager->persist($advertSkill16);
    $manager->persist($advertSkill17);
    $manager->persist($advertSkill18);
    $manager->persist($advertSkill19);
    $manager->persist($advertSkill20); */

    $manager->flush();
  }
}


?>
