import React from 'react'

const StopWatchDisplay = (props) => {

    
    return (
       <div className='mt-2 mb-4'>
          <span className='alert alert-info'>{(props.time.h >= 10)? props.time.h : "0"+ props.time.h}</span>&nbsp;:&nbsp;
          <span className='alert alert-info'>{(props.time.m >= 10)? props.time.m : "0"+ props.time.m}</span>&nbsp;:&nbsp;
          <span className='alert alert-info'>{(props.time.s >= 10)? props.time.s : "0"+ props.time.s}</span>
       </div>
    );
   
}

export default StopWatchDisplay
