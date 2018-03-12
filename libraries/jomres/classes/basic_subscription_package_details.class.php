
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
s
u
b
s
c
r
i
p
t
i
o
n
_
p
a
c
k
a
g
e
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
a
l
l
P
a
c
k
a
g
e
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
g
e
t
A
l
l
S
u
b
s
c
r
i
p
t
i
o
n
P
a
c
k
a
g
e
s
(
)
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
a
t
h
e
r
D
a
t
a
(
$
p
a
c
k
a
g
e
_
i
d
 
=
 
0
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
p
a
c
k
a
g
e
_
i
d
 
=
=
 
0
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
a
c
k
a
g
e
 
i
d
 
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
p
a
c
k
a
g
e
_
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
a
l
l
P
a
c
k
a
g
e
s
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
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
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
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
a
m
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
n
a
m
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
d
e
s
c
r
i
p
t
i
o
n
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
u
b
l
i
s
h
e
d
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
r
e
q
u
e
n
c
y
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
f
r
e
q
u
e
n
c
y
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
f
u
l
l
_
a
m
o
u
n
t
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
f
u
l
l
_
a
m
o
u
n
t
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
a
x
_
c
o
d
e
_
i
d
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
c
u
r
r
e
n
c
y
c
o
d
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
r
e
n
e
w
a
l
_
p
r
i
c
e
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
 
]
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
a
m
s
 
=
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
p
a
c
k
a
g
e
_
i
d
 
]
[
 
'
p
a
r
a
m
s
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
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
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
G
e
t
 
a
l
l
 
s
u
b
s
c
r
i
p
t
i
o
n
 
p
a
c
k
a
g
e
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
A
l
l
S
u
b
s
c
r
i
p
t
i
o
n
P
a
c
k
a
g
e
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
c
h
e
c
k
 
i
f
 
w
e
 
a
l
r
e
a
d
y
 
g
o
t
 
t
h
e
m

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
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
n
a
m
e
`
,

	
	
	
	
	
	
`
d
e
s
c
r
i
p
t
i
o
n
`
,

	
	
	
	
	
	
`
p
u
b
l
i
s
h
e
d
`
,

	
	
	
	
	
	
`
f
r
e
q
u
e
n
c
y
`
,

	
	
	
	
	
	
`
f
u
l
l
_
a
m
o
u
n
t
`
,

	
	
	
	
	
	
`
t
a
x
_
c
o
d
e
_
i
d
`
,

	
	
	
	
	
	
`
c
u
r
r
e
n
c
y
c
o
d
e
`
,

	
	
	
	
	
	
`
r
e
n
e
w
a
l
_
p
r
i
c
e
`
,

	
	
	
	
	
	
`
p
a
r
a
m
s
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
p
o
r
t
a
l
_
s
u
b
s
c
r
i
p
t
i
o
n
s
_
p
a
c
k
a
g
e
s
 
'
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
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
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
 
$
r
-
>
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
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
n
a
m
e
'
 
]
 
=
 
$
r
-
>
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
d
e
s
c
r
i
p
t
i
o
n
'
 
]
 
=
 
$
r
-
>
d
e
s
c
r
i
p
t
i
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
p
u
b
l
i
s
h
e
d
'
 
]
 
=
 
$
r
-
>
p
u
b
l
i
s
h
e
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
f
r
e
q
u
e
n
c
y
'
 
]
 
=
 
$
r
-
>
f
r
e
q
u
e
n
c
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
f
u
l
l
_
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
f
u
l
l
_
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
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
t
a
x
_
c
o
d
e
_
i
d
'
 
]
 
=
 
$
r
-
>
t
a
x
_
c
o
d
e
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
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
c
u
r
r
e
n
c
y
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
u
r
r
e
n
c
y
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
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
r
e
n
e
w
a
l
_
p
r
i
c
e
'
 
]
 
=
 
$
r
-
>
r
e
n
e
w
a
l
_
p
r
i
c
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
P
a
c
k
a
g
e
s
[
 
$
r
-
>
i
d
 
]
[
 
'
p
a
r
a
m
s
'
 
]
 
=
 
u
n
s
e
r
i
a
l
i
z
e
(
$
r
-
>
p
a
r
a
m
s
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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

}

