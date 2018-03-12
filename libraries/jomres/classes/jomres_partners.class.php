
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
o
m
r
e
s
_
p
a
r
t
n
e
r
s

{

 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
a
l
l
_
u
s
e
r
s
 
=
 
j
o
m
r
e
s
_
c
m
s
s
p
e
c
i
f
i
c
_
g
e
t
C
M
S
U
s
e
r
s
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
t
n
e
r
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
t
n
e
r
_
g
u
e
s
t
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
i
d
,
c
m
s
_
u
s
e
r
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
a
r
t
n
e
r
s
'
;

 
 
 
 
 
 
 
 
$
e
x
i
s
t
i
n
g
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
e
x
i
s
t
i
n
g
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
e
x
i
s
t
i
n
g
 
a
s
 
$
p
a
r
t
n
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
m
s
_
u
s
e
r
i
d
 
=
 
$
p
a
r
t
n
e
r
-
>
c
m
s
_
u
s
e
r
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
t
n
e
r
s
[
$
c
m
s
_
u
s
e
r
i
d
]
[
'
c
m
s
_
u
s
e
r
i
d
'
]
 
=
 
$
c
m
s
_
u
s
e
r
i
d
;

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
p
a
r
t
n
e
r
s
[
$
c
m
s
_
u
s
e
r
i
d
]
[
'
u
s
e
r
n
a
m
e
'
]
 
=
 
'
'
;

	
	
	
	
i
f
 
(
i
s
s
e
t
(
$
a
l
l
_
u
s
e
r
s
[
$
c
m
s
_
u
s
e
r
i
d
]
[
'
u
s
e
r
n
a
m
e
'
]
)
)
 
{

	
	
	
	
	
$
t
h
i
s
-
>
p
a
r
t
n
e
r
s
[
$
c
m
s
_
u
s
e
r
i
d
]
[
'
u
s
e
r
n
a
m
e
'
]
 
=
 
$
a
l
l
_
u
s
e
r
s
[
$
c
m
s
_
u
s
e
r
i
d
]
[
'
u
s
e
r
n
a
m
e
'
]
;

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
l
o
n
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
C
l
o
n
i
n
g
 
n
o
t
 
a
l
l
o
w
e
d
 
o
n
 
a
 
s
i
n
g
l
e
t
o
n
 
o
b
j
e
c
t
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
i
s
_
t
h
i
s
_
c
m
s
_
u
s
e
r
_
a
_
p
a
r
t
n
e
r
(
$
c
m
s
_
u
s
e
r
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
(
i
n
t
)
 
$
c
m
s
_
u
s
e
r
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
t
h
i
s
-
>
p
a
r
t
n
e
r
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
c
m
s
_
u
s
e
r
i
d
,
 
$
t
h
i
s
-
>
p
a
r
t
n
e
r
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
_
g
u
e
s
t
_
u
i
d
s
_
f
o
r
_
p
a
r
t
n
e
r
(
$
c
m
s
_
u
s
e
r
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
m
s
_
u
s
e
r
i
d
 
=
 
(
i
n
t
)
 
$
c
m
s
_
u
s
e
r
i
d
;

 
 
 
 
 
 
 
 
i
f
 
(
$
c
m
s
_
u
s
e
r
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
g
u
e
s
t
s
_
u
i
d
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
s
 
W
H
E
R
E
 
p
a
r
t
n
e
r
_
i
d
 
=
 
'
.
$
c
m
s
_
u
s
e
r
i
d
;

 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
i
f
 
(
e
m
p
t
y
(
$
r
e
s
u
l
t
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
r
e
s
u
l
t
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
i
d
 
=
 
(
i
n
t
)
 
$
r
-
>
g
u
e
s
t
s
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
a
r
t
n
e
r
_
g
u
e
s
t
s
[
$
c
m
s
_
u
s
e
r
i
d
 
]
[
]
 
=
 
$
g
u
e
s
t
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
p
a
r
t
n
e
r
_
g
u
e
s
t
s
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
c
h
e
c
k
_
p
a
r
t
n
e
r
_
d
e
t
a
i
l
s
_
c
o
m
p
l
e
t
e
(
$
c
m
s
_
u
s
e
r
i
d
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
c
m
s
_
u
s
e
r
i
d
 
=
 
(
i
n
t
)
 
$
c
m
s
_
u
s
e
r
i
d
;

 
 
 
 
 
 
 
 
i
f
 
(
$
c
m
s
_
u
s
e
r
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
a
r
r
a
y
_
k
e
y
_
e
x
i
s
t
s
(
$
c
m
s
_
u
s
e
r
i
d
,
 
$
t
h
i
s
-
>
p
a
r
t
n
e
r
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
t
h
r
o
w
 
n
e
w
 
E
x
c
e
p
t
i
o
n
(
'
S
y
s
t
e
m
 
t
r
i
e
d
 
t
o
 
c
h
e
c
k
 
i
f
 
p
a
r
t
n
e
r
 
d
e
t
a
i
l
s
 
w
e
r
e
 
c
o
m
p
l
e
t
e
 
f
o
r
 
u
s
e
r
i
d
 
'
.
p
r
i
n
t
_
r
(
$
c
m
s
_
u
s
e
r
i
d
)
.
'
 
h
o
w
e
v
e
r
 
t
h
e
 
u
s
e
r
 
i
s
 
n
o
t
 
a
 
p
a
r
t
n
e
r
 
'
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T

	
	
	
	
	
	
	
`
i
d
`
,

	
	
	
	
	
	
	
`
c
m
s
_
u
s
e
r
_
i
d
`
,

	
	
	
	
	
	
	
`
f
i
r
s
t
n
a
m
e
`
,

	
	
	
	
	
	
	
`
s
u
r
n
a
m
e
`
,

	
	
	
	
	
	
	
`
h
o
u
s
e
`
,

	
	
	
	
	
	
	
`
s
t
r
e
e
t
`
,

	
	
	
	
	
	
	
`
t
o
w
n
`
,

	
	
	
	
	
	
	
`
c
o
u
n
t
y
`
,

	
	
	
	
	
	
	
`
c
o
u
n
t
r
y
`
,

	
	
	
	
	
	
	
`
p
o
s
t
c
o
d
e
`
,

	
	
	
	
	
	
	
`
t
e
l
_
l
a
n
d
l
i
n
e
`
,

	
	
	
	
	
	
	
`
t
e
l
_
m
o
b
i
l
e
`
,

	
	
	
	
	
	
	
`
e
m
a
i
l
`

	
	
	
	
	
	
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
g
u
e
s
t
_
p
r
o
f
i
l
e
 

	
	
	
	
	
	
W
H
E
R
E
 
`
c
m
s
_
u
s
e
r
_
i
d
`
 
=
 
'
 
.
(
i
n
t
)
 
$
c
m
s
_
u
s
e
r
i
d
.
'
 

	
	
	
	
	
	
L
I
M
I
T
 
1
 
'
;

 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
,
 
2
)
;


 
 
 
 
 
 
 
 
i
f
 
(

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
f
i
r
s
t
n
a
m
e
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
s
u
r
n
a
m
e
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
h
o
u
s
e
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
s
t
r
e
e
t
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
t
o
w
n
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
c
o
u
n
t
y
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
p
o
s
t
c
o
d
e
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
c
o
u
n
t
r
y
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
e
m
a
i
l
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
t
e
l
_
l
a
n
d
l
i
n
e
'
]
 
=
=
 
'
'
 
|
|

 
 
 
 
 
 
 
 
 
 
 
 
$
u
s
e
r
P
r
o
f
i
l
e
[
'
t
e
l
_
m
o
b
i
l
e
'
]
 
=
=
 
'
'

 
 
 
 
 
 
 
 
 
 
 
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

}

