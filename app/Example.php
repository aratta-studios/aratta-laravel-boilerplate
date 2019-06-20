<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

/**
 * @property integer $id
 * @property string $api_token
 * @property string $field_one
 * @property string $field_two
 * @property string $created_at
 * @property string $updated_at
 */
class Example extends Model implements Authenticatable
{
    /**
     * The "type" of the auto-incrementing ID.
     *
     * @var string
     */
    protected $keyType = 'integer';

    /**
     * @var array
     */
    protected $fillable = ['api_token', 'field_one', 'field_two', 'created_at', 'updated_at'];


    public static function generateToken()
    {
        $token = Str::random(60);
        $example = Example::where('api_token', $token)->first();
        if (!is_null($example)) {
            $token = self::generateToken();
        }
        return $token;
    }


    /**
     * @param $field_one
     * @param $field_two
     * @return Example
     */
    public static function createExample($field_one, $field_two)
    {
        $example = new Example();
        $example->field_one = $field_one;
        $example->field_two = $field_two;
        $example->api_token = Example::generateToken();
        $example->save();
        return $example;
    }


    /**
     * @param $id
     * @param $field_one
     * @param $field_two
     * @return Example
     */
    public static function updateExample($id, $field_one, $field_two)
    {
        $example = Example::where('id', $id)->first();
        if (!empty($field_one)) {
            $example->field_one = $field_one;
        }
        if (!empty($field_two)) {
            $example->field_two = $field_two;
        }
        $example->save();
        return $example;
    }

    /**
     * @param $id
     * @return Example
     */
    public static function getExample($id)
    {
        $example = Example::where('id', $id)->first();
        return $example;
    }

    /**
     * @param $offset
     * @return Example
     */
    public static function getExamples($offset)
    {
        $example = Example::orderBy('created_at', 'DESC')->skip($offset)->take(20)->get();
        return $example;
    }

    /**
     * Get the name of the unique identifier for the user.
     *
     * @return string
     */
    public function getAuthIdentifierName()
    {
        // TODO: Implement getAuthIdentifierName() method.
    }

    /**
     * Get the unique identifier for the user.
     *
     * @return mixed
     */
    public function getAuthIdentifier()
    {
        // TODO: Implement getAuthIdentifier() method.
    }

    /**
     * Get the password for the user.
     *
     * @return string
     */
    public function getAuthPassword()
    {
        // TODO: Implement getAuthPassword() method.
    }

    /**
     * Get the token value for the "remember me" session.
     *
     * @return string
     */
    public function getRememberToken()
    {
        // TODO: Implement getRememberToken() method.
    }

    /**
     * Set the token value for the "remember me" session.
     *
     * @param string $value
     * @return void
     */
    public function setRememberToken($value)
    {
        // TODO: Implement setRememberToken() method.
    }

    /**
     * Get the column name for the "remember me" token.
     *
     * @return string
     */
    public function getRememberTokenName()
    {
        // TODO: Implement getRememberTokenName() method.
    }
}
