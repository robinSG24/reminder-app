<?php

/**
 * @OA\Info(
 *      version="1.0.0",
 *      title="Reminder App Swagger Documentation",
 *      description="Reminder App Swgger Documentation",
 *      @OA\Contact(
 *          email="admin@admin.com"
 *      ),
 *      @OA\License(
 *          name="Apache 2.0",
 *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
 *      )
 * )
 *
 * @OA\Server(
 *      url=L5_SWAGGER_CONST_HOST,
 *      description="API Server"
 * )

 *
 *
 */


/**
 * @OA\Post(
 ** path="/reminder/create",
 *   tags={"Reminder"},
 *   summary="Create Reminder",
 *   operationId="reminder",
 *
 *   @OA\Parameter(
 *      name="content",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *
 *   @OA\Parameter(
 *      name="reminder_at",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *
 *
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *      )
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="not found"
 *   ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *)
 **/


/**
 * @OA\Put(
 ** path="/reminder/read/{id}",
 *   tags={"Reminder"},
 *   summary="Records the time of read of the reminder",
 *   operationId="reminder",
 *
 *   @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *
 *
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *      )
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="not found"
 *   ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *)
 **/


/**
 * @OA\Get(
 ** path="/reminder/upcoming",
 *   tags={"Reminder"},
 *   summary="Retrieves list of upcoming reminders",
 *   operationId="reminder",
 *
 *   @OA\Parameter(
 *      name="reminder_at",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *
 *
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *      )
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="not found"
 *   ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *)
 **/


/**
 * @OA\Put(
 ** path="/reminder/update/{id}",
 *   tags={"Reminder"},
 *   summary="Create Reminder",
 *   operationId="reminder",
 *
 *   @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="integer"
 *      )
 *   ),
 *
 *   @OA\Parameter(
 *      name="content",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *
 *   @OA\Parameter(
 *      name="reminder_at",
 *      in="query",
 *      required=true,
 *      @OA\Schema(
 *           type="string"
 *      )
 *   ),
 *
 *
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *      )
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="not found"
 *   ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *)
 **/


/**
 * @OA\Delete(
 ** path="/reminder/delete/{id}",
 *   tags={"Reminder"},
 *   summary="Deletes Reminder",
 *   operationId="reminder",
 *
 *   @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="integer"
 *      )
 *   ),
 *
 *
 *
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *      )
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="not found"
 *   ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *)
 **/



/**
 * @OA\Put(
 ** path="/reminder/complete/{id}",
 *   tags={"Reminder"},
 *   summary="Completes Reminder",
 *   operationId="reminder",
 *
 *   @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="integer"
 *      )
 *   ),
 *
 *
 *
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *      )
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="not found"
 *   ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *)
 **/



/**
 * @OA\Put(
 ** path="/reminder/reopen/{id}",
 *   tags={"Reminder"},
 *   summary="Records time of Reopened Reminder",
 *   operationId="reminder",
 *
 *   @OA\Parameter(
 *      name="id",
 *      in="path",
 *      required=true,
 *      @OA\Schema(
 *           type="integer"
 *      )
 *   ),
 *
 *
 *
 *   @OA\Response(
 *      response=200,
 *       description="Success",
 *      @OA\MediaType(
 *          mediaType="application/json",
 *      )
 *   ),
 *   @OA\Response(
 *      response=404,
 *      description="not found"
 *   ),
 *      @OA\Response(
 *          response=403,
 *          description="Forbidden"
 *      )
 *)
 **/
