<?php

declare(strict_types=1);

namespace Modules\Gdpr\Models;

/**
 * Modules\Gdpr\Models\Document.
 *
 * @property string $logo_src
 */
class Document extends BaseModel
{
    /**
     * @var array<string>
     */
    protected $fillable = [
        'id',
        'lang',
        'subject',
        'body_html',
        'post_type',
        'post_id',
        'logo_src',
        'logo_width',
        'logo_height',
        'view_params',
    ];

    protected $appends = [
        // 'logo',
    ];

    /**
     * @var array<string, string>
     */
    protected $casts = [
        'view_params' => 'array',
    ];

    public function getLogoAttribute(?array $value): array
    {
        return [
            'path' => asset(strval($this->logo_src)),
            'width' => $this->logo_width ?? 50,
            'height' => $this->logo_height ?? 50,
        ];
    }
}
