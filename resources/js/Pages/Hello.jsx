import React from 'react'

export default function Hello ({who, token}) {

    console.log(token)
    return (
        <div>
            Hello I'm {who}
        </div>
    )
}