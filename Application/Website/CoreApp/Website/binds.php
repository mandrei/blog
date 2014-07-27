<?php
/**
 * User: andrei
 * Date: 1/25/14
 * Time: 12:25 AM
 */

/*
 * Journal
 */
App::bind('WebsiteJournalModel', 'CoreApp\Website\Models\WebsiteJournal');

App::bind('WebsiteJournalRepository', 'CoreApp\Website\Repositories\WebsiteJournal');

App::bind('WebsiteJournalDatabase','CoreApp\Website\Databases\WebsiteJournal');


/*
 * Journal Categories
 */
App::bind('WebsiteJournalCategoryModel', 'CoreApp\Website\Models\JournalCategory');

App::bind('WebsiteJournalCategoryRepository', 'CoreApp\Website\Repositories\JournalCategory');

App::bind('WebsiteJournalCategoryDatabase','CoreApp\Website\Databases\JournalCategory');


/*
 * Journal Post Category
 */
App::bind('WebsiteJournalPostCategoryModel','CoreApp\Website\Models\JournalPostCategory');

App::bind('WebsiteJournalPostCategoryRepository', 'CoreApp\Website\Repositories\JournalPostCategory');

App::bind('WebsiteJournalPostCategoryDatabase','CoreApp\Website\Databases\JournalPostCategory');


/*
 * Journal tags
 */
App::bind('WebsiteJournalTagModel','CoreApp\Website\Models\JournalTag');

App::bind('WebsiteJournalTagRepository', 'CoreApp\Website\Repositories\JournalTag');

App::bind('WebsiteJournalTagDatabase','CoreApp\Website\Databases\JournalTag');


/*
 * Journal post tags
 */
App::bind('WebsiteJournalPostTagModel','CoreApp\Website\Models\JournalPostTag');

App::bind('WebsiteJournalPostTagRepository','CoreApp\Website\Repositories\JournalPostTag');

App::bind('WebsiteJournalPostTagDatabase','CoreApp\Website\Databases\JournalPostTag');


/*
 * Meta Pages
 */
App::bind('WebsiteMetaPagesModel', 'CoreApp\Website\Models\MetaPages');

App::bind('WebsiteMetaPagesRepository', 'CoreApp\Website\Repositories\MetaPages');

App::bind('WebsiteMetaPagesDatabase','CoreApp\Website\Databases\MetaPages');


/*
 * Slideshow
 */
App::bind('WebsiteSlideshowModel', 'CoreApp\Website\Models\Slideshow');

App::bind('WebsiteSlideshowRepository', 'CoreApp\Website\Repositories\Slideshow');

App::bind('WebsiteSlideshowDatabase','CoreApp\Website\Databases\Slideshow');
