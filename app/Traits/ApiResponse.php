<?php

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

/**
 * Trait ApiResponse
 */
trait ApiResponse
{
    public function ok($data, $message = null): JsonResponse
    {
        $message = $message ?? __('Your execution has been completed successfully');

        return response()->success($data, __($message), Response::HTTP_OK);
    }

    public function error($errors = [], $message = null): JsonResponse
    {
        $message = $message ?? __('There is something wrong. Please, try again later!');

        return response()->error($errors, __($message), Response::HTTP_INTERNAL_SERVER_ERROR);
    }

    public function created($data, $message = null): JsonResponse
    {
        $message = $message ?? __('Your execution has been completed successfully');

        return response()->success($data, __($message), Response::HTTP_CREATED);
    }

    public function noContent($data, $message = null): JsonResponse
    {
        $message = $message ?? __('Your execution has been completed successfully');

        return response()->success($data, __($message), Response::HTTP_NO_CONTENT);
    }

    public function validationWarning($errors = [], $message = '')
    {
        return response()->error(
            errors: $errors,
            message: $message,
            statusCode: Response::HTTP_UNPROCESSABLE_ENTITY
        );
    }

    public function notFound(string $message = 'Not Found'): JsonResponse
    {
        return response()->error([], __($message), Response::HTTP_NOT_FOUND);
    }

    public function unauthorized($errors = [])
    {
        return response()->error(
            errors: $errors,
            statusCode: Response::HTTP_UNAUTHORIZED,
            message: __('Please, login and try again!')
        );
    }
}
