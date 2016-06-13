<?php
/**
 * An helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
/**
 * App\Cashier
 *
 */
	class Cashier extends \Eloquent {}
}

namespace App{
/**
 * App\Category
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Subcategory[] $subcategory
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $item
 */
	class Category extends \Eloquent {}
}

namespace App{
/**
 * App\Item
 *
 * @property-read \App\Category $category
 * @property-read \App\Member $seller
 * @property-read \App\Subcategory $subcategory
 * @property-read \App\Quote $quote
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Message[] $message
 */
	class Item extends \Eloquent {}
}

namespace App{
/**
 * App\Member
 *
 * @property-read \App\User $user
 * @property-read \App\Package $package
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $item
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Message[] $seller
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Message[] $buyer
 */
	class Member extends \Eloquent {}
}

namespace App{
/**
 * App\Message
 *
 * @property-read \App\Member $seller
 * @property-read \App\Member $buyer
 * @property-read \App\Quote $quote
 * @property-read \App\Item $item
 */
	class Message extends \Eloquent {}
}

namespace App{
/**
 * App\Package
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Member[] $member
 */
	class Package extends \Eloquent {}
}

namespace App{
/**
 * App\Quote
 *
 * @property-read \App\Item $item
 * @property-read \App\Member $seller
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Message[] $message
 */
	class Quote extends \Eloquent {}
}

namespace App{
/**
 * App\Subcategory
 *
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Item[] $item
 */
	class Subcategory extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property-read \App\Member $member
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 */
	class User extends \Eloquent {}
}

