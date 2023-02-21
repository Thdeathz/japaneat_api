<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class MergeController extends Controller
{
    public function mergeAudioVideo(Request $request): \Illuminate\Http\JsonResponse
    {
        $audioUrl = $request->input('audio_url');
        $videoUrl = $request->input('video_url');

        // Download audio and video files using GuzzleHttp.
        $audio = (new Client())->get($audioUrl)->getBody()->getContents();
        $video = (new Client())->get($videoUrl)->getBody()->getContents();

//        // Save audio and video files to the server.
        $audioPath = storage_path('app/public/audio.mp3');
        $videoPath = storage_path('app/public/video.mp4');
        file_put_contents($audioPath, $audio);
        file_put_contents($videoPath, $video);
//
//        // Merge the audio and video files using FFmpeg.
        $mergedPath = storage_path('app/public/merged.mp4');
        exec("ffmpeg -i $videoPath -i $audioPath -c:v copy -c:a aac -strict experimental $mergedPath");
//
//        // Return the URL of the merged video file.
        $url = url('storage/merged.mp4');
        return response()->json(['url' => $url]);
    }
}
