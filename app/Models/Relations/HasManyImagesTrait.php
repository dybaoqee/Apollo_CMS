<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\BootstrapCMS\Models\Relations;

/**
 * This is the has many comments trait.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
trait HasManyImagesTrait
{
    /**
     * Get the comment relation.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOneOrMany
     */
    public function images()
    {
        return $this->hasMany('GrahamCampbell\BootstrapCMS\Models\Image');
    }

    /**
     * Delete all images.
     *
     * @return void
     */
    public function deleteImages()
    {
        foreach ($this->images()->get(['id']) as $image) {
            $image->delete();
        }
    }
}
