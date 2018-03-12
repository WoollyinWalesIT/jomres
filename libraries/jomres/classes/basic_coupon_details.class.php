
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
 
b
a
s
i
c
_
c
o
u
p
o
n
_
d
e
t
a
i
l
s

{

 
 
 
 
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
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
t
h
i
s
-
>
c
o
u
p
o
n
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
i
d
 
=
 
0
;
 
/
/
 
c
o
u
p
o
n
_
i
d

	
	
$
t
h
i
s
-
>
p
r
o
p
e
r
t
y
_
u
i
d
 
=
 
0
;

	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
_
c
o
d
e
 
=
 
'
'
;

	
	
$
t
h
i
s
-
>
v
a
l
i
d
_
f
r
o
m
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
;

	
	
$
t
h
i
s
-
>
v
a
l
i
d
_
t
o
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
;

	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
;

	
	
$
t
h
i
s
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
 
=
 
d
a
t
e
(
"
Y
-
m
-
d
"
)
;

	
	
$
t
h
i
s
-
>
a
m
o
u
n
t
 
=
 
0
.
0
0
;

	
	
$
t
h
i
s
-
>
i
s
_
p
e
r
c
e
n
t
a
g
e
 
=
 
1
;

	
	
$
t
h
i
s
-
>
r
o
o
m
s
_
o
n
l
y
 
=
 
0
;

	
	
$
t
h
i
s
-
>
g
u
e
s
t
_
u
i
d
 
=
 
0
;

 
 
 
 
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


 
 
 
 
/
/
G
e
t
 
a
l
l
 
c
o
u
p
o
n
s
 
d
e
t
a
i
l
s
 
f
o
r
 
o
n
e
 
o
r
 
m
o
r
e
 
p
r
o
p
e
r
t
y
 
u
i
d
s

 
 
 
 
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
a
l
l
_
c
o
u
p
o
n
s
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
a
r
r
a
y
(
)
)

 
 
 
 
{

	
	
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
p
r
o
p
e
r
t
y
_
u
i
d
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
E
r
r
o
r
:
 
P
r
o
p
e
r
t
y
 
u
i
d
s
 
n
o
t
 
s
e
t
.
'
)
;

	
	
}


 
 
 
 
 
 
 
 
/
/
 
F
i
r
s
t
 
w
e
 
n
e
e
d
 
t
o
 
e
x
t
r
a
c
t
 
t
h
o
s
e
 
u
i
d
s
 
t
h
a
t
 
a
r
e
 
n
o
t
 
a
l
r
e
a
d
y
 
i
n
 
t
h
e
 
$
t
h
i
s
-
>
c
o
u
p
o
n
s
 
v
a
r
,
 
t
h
i
s
 
(
m
a
y
)
 
r
e
d
u
c
e
 
t
h
e
 
n
u
m
b
e
r
 
o
f
 
p
r
o
p
e
r
t
i
e
s
 
w
e
 
n
e
e
d
 
t
o
 
q
u
e
r
y

 
 
 
 
 
 
 
 
$
t
e
m
p
_
a
r
r
a
y
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
a
s
 
$
i
d
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
i
d
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
c
o
u
p
o
n
s
[
$
i
d
]
 
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
e
m
p
_
a
r
r
a
y
[
]
 
=
 
(
i
n
t
)
$
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
u
i
d
s
 
=
 
$
t
e
m
p
_
a
r
r
a
y
;

 
 
 
 
 
 
 
 
u
n
s
e
t
(
$
t
e
m
p
_
a
r
r
a
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
p
r
o
p
e
r
t
y
_
u
i
d
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
 
/
/
w
e
 
a
l
r
e
a
d
y
 
h
a
v
e
 
t
h
e
 
d
a
t
a
 
f
o
r
 
a
l
l
 
p
r
o
p
e
r
t
y
 
u
i
d
s
 
p
a
s
s
e
d

	
	
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T

	
	
	
	
	
`
c
o
u
p
o
n
_
i
d
`
,

	
	
	
	
	
`
p
r
o
p
e
r
t
y
_
u
i
d
`
,

	
	
	
	
	
`
c
o
u
p
o
n
_
c
o
d
e
`
,

	
	
	
	
	
`
v
a
l
i
d
_
f
r
o
m
`
,

	
	
	
	
	
`
v
a
l
i
d
_
t
o
`
,

	
	
	
	
	
`
a
m
o
u
n
t
`
,
 

	
	
	
	
	
`
i
s
_
p
e
r
c
e
n
t
a
g
e
`
,

	
	
	
	
	
`
r
o
o
m
s
_
o
n
l
y
`
,
	
	
	
	
	

	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
`
,

	
	
	
	
	
`
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
`
,

	
	
	
	
	
`
g
u
e
s
t
_
u
i
d
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
c
o
u
p
o
n
s
 
 

	
	
	
	
W
H
E
R
E
 
`
p
r
o
p
e
r
t
y
_
u
i
d
`
 
I
N
 
(
"
.
j
o
m
r
e
s
_
i
m
p
l
o
d
e
(
$
p
r
o
p
e
r
t
y
_
u
i
d
s
)
.
"
)
"
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
!
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
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
i
d
'
]
 
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
c
o
u
p
o
n
_
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
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
p
r
o
p
e
r
t
y
_
u
i
d
'
]
 
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
p
r
o
p
e
r
t
y
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
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
c
o
u
p
o
n
_
c
o
d
e
'
]
 
=
 
$
r
-
>
c
o
u
p
o
n
_
c
o
d
e
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
v
a
l
i
d
_
f
r
o
m
'
]
 
=
 
$
r
-
>
v
a
l
i
d
_
f
r
o
m
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
v
a
l
i
d
_
t
o
'
]
 
=
 
$
r
-
>
v
a
l
i
d
_
t
o
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
a
m
o
u
n
t
'
]
 
=
 
$
r
-
>
a
m
o
u
n
t
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
i
s
_
p
e
r
c
e
n
t
a
g
e
'
]
 
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
i
s
_
p
e
r
c
e
n
t
a
g
e
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
r
o
o
m
s
_
o
n
l
y
'
]
 
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
r
o
o
m
s
_
o
n
l
y
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
'
]
 
=
 
$
r
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
f
r
o
m
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
'
]
 
=
 
$
r
-
>
b
o
o
k
i
n
g
_
v
a
l
i
d
_
t
o
;

	
	
	
	
$
t
h
i
s
-
>
c
o
u
p
o
n
s
[
$
r
-
>
p
r
o
p
e
r
t
y
_
u
i
d
]
[
$
r
-
>
c
o
u
p
o
n
_
i
d
]
[
'
g
u
e
s
t
_
u
i
d
'
]
 
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
_
u
i
d
;

	
	
	
}

	
	
}


 
 
 
 
 
 
 
 
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

