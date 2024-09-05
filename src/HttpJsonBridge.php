<?php

namespace Kepsondiaz\HttpJsonBridge;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Symfony\Component\HttpFoundation\Response;

class HttpJsonBridge
{

    /**
     * Response with status code 400.
     */
    public function badRequestApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_BAD_REQUEST, $message);
    }

    /**
     * Error Response
     */
    public function errorApiResponse(array $errors, int $statusCode = Response::HTTP_INTERNAL_SERVER_ERROR, string $message = ''): JsonResponse
    {
        $response           = $this->prepareApiResponse($message, $statusCode);
        $response['errors'] = $errors;

        return response()->json($response, $statusCode);
    }

    /**
     * Prepare response.
     */
    public function prepareApiResponse(string $message = '', int $statusCode = Response::HTTP_OK): array
    {
        if (empty($message)) {
            $message = Response::$statusTexts[$statusCode];
        }

        return [
            'message'    => $message,
            'statusCode' => $statusCode,
        ];
    }

    /**
     * Response with status code 409.
     */
    public function conflictApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_CONFLICT, $message);
    }

    /**
     * Response with status code 201.
     */
    public function createdApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->successApiResponse($data, Response::HTTP_CREATED, $message);
    }

    /**
     * Success Response
     */
    public function successApiResponse(array|ResourceCollection $data, int $statusCode = Response::HTTP_OK, string $message = '', ?array $meta = null): JsonResponse
    {
        $response = $this->prepareApiResponse($message, $statusCode);

        if (is_array($data)) {
            $response['data'] = $data;
        }

        if ($data instanceof ResourceCollection) {
            $response = array_merge($response, (array) $data->response()->getData());
        }

        return response()->json($response, $statusCode);
    }

    /**
     * Response with status code 403.
     */
    public function forbiddenApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_FORBIDDEN, $message);
    }

    /**
     * Response with status code 404.
     */
    public function notFoundApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_NOT_FOUND, $message);
    }

    /**
     * Response with status code 200.
     */
    public function okApiResponse(array|ResourceCollection $data = [], string $message = ''): JsonResponse
    {
        return $this->successApiResponse($data, Response::HTTP_OK, $message);
    }

    /**
     * Response with status code 401.
     */
    public function unauthorizedApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_UNAUTHORIZED, $message);
    }

    /**
     * Response with status code 422.
     */
    public function unprocessableApiResponse(array $data, string $message = ''): JsonResponse
    {
        return $this->errorApiResponse($data, Response::HTTP_UNPROCESSABLE_ENTITY, $message);
    }

}