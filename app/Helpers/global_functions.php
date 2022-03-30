<?php
    if(!function_exists('apiSendResponse')){
        function apiSendResponse($result, $message='',$code=200)
        {
        $response = [
                'status' => true,
                'data'    => $result,
                'message' => $message,
                'code' => $code,
            ];
            return response()->json($response, $code);
        }
    }
    if(!function_exists('apiSendError')){

        function apiSendError($error, $code = 200,$errorMessages = []) //404
        {
            if($error !=''){
                array_push($errorMessages,$error);
            }

        $response = [
                'status' => false,
            ];

            if(!empty($errorMessages)){
                $response['errors'] = $errorMessages;

            }

            $response['code'] = $code;

            return response()->json($response, $code);
        }

    }
