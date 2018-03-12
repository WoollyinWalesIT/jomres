
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
s
h
o
r
t
c
o
d
e
_
p
a
r
s
e
r

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
s
h
o
r
t
c
o
d
e
s
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
_
f
i
l
e
 
=
 
J
O
M
R
E
S
_
T
E
M
P
_
A
B
S
P
A
T
H
.
'
s
h
o
r
t
c
o
d
e
s
.
p
h
p
'
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
e
t
_
s
h
o
r
t
c
o
d
e
s
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
b
u
i
l
d
_
s
h
o
r
t
c
o
d
e
s
(
)
;


 
 
 
 
 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
_
f
i
l
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
_
o
n
c
e
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
_
f
i
l
e
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
,
 
t
h
e
 
s
h
o
r
t
c
o
d
e
s
 
f
i
l
e
 
c
o
u
l
d
n
`
t
 
b
e
 
c
r
e
a
t
e
d
.
'
)
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
 
b
u
i
l
d
_
s
h
o
r
t
c
o
d
e
s
(
$
f
o
r
c
e
 
=
 
f
a
l
s
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
e
x
i
s
t
s
(
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
_
f
i
l
e
)
 
|
|
 
$
f
o
r
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
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
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
 
=
 
t
r
u
e
;


 
 
 
 
 
 
 
 
 
 
 
 
$
e
v
e
n
t
A
r
g
s
 
=
 
n
u
l
l
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
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
r
e
g
i
s
t
e
r
e
d
C
l
a
s
s
e
s
 
a
s
 
$
e
v
e
n
t
P
o
i
n
t
 
=
>
 
$
e
v
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
v
 
a
s
 
$
e
v
e
n
t
N
a
m
e
 
=
>
 
$
e
v
e
n
t
D
e
t
a
i
l
s
)
 
{

	
	
	
	
	
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
 
=
 
'
.
c
l
a
s
s
.
p
h
p
'
;

	
	
	
	
	
$
f
i
l
e
n
a
m
e
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
.
$
c
l
a
s
s
F
i
l
e
S
u
f
f
i
x
;


	
	
	
	
	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
)
)
 
{

	
	
	
	
	
	
i
f
 
(
$
e
v
e
n
t
P
o
i
n
t
 
=
=
 
'
0
6
0
0
0
'
 
|
|
 
$
e
v
e
n
t
P
o
i
n
t
 
=
=
 
'
0
6
0
0
1
'
 
|
|
 
$
e
v
e
n
t
P
o
i
n
t
 
=
=
 
'
0
6
0
0
2
'
 
|
|
 
$
e
v
e
n
t
P
o
i
n
t
 
=
=
 
'
0
6
0
0
5
'
)
 
{

	
	
	
	
	
	
	
$
e
v
e
n
t
 
=
 
'
j
'
.
$
e
v
e
n
t
P
o
i
n
t
.
$
e
v
e
n
t
N
a
m
e
;


	
	
	
	
	
	
	
i
f
 
(
!
c
l
a
s
s
_
e
x
i
s
t
s
(
$
e
v
e
n
t
)
)
 
{

	
	
	
	
	
	
	
	
i
n
c
l
u
d
e
_
o
n
c
e
 
$
e
v
e
n
t
D
e
t
a
i
l
s
[
 
'
f
i
l
e
p
a
t
h
'
 
]
.
$
f
i
l
e
n
a
m
e
;

	
	
	
	
	
	
	
}


	
	
	
	
	
	
	
$
e
 
=
 
n
e
w
 
$
e
v
e
n
t
(
$
e
v
e
n
t
A
r
g
s
)
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
e
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
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
s
h
o
r
t
c
o
d
e
s
[
$
e
v
e
n
t
P
o
i
n
t
]
[
]
 
=
 
$
e
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
;

	
	
	
	
	
	
	
}


	
	
	
	
	
	
	
u
n
s
e
t
(
$
e
)
;

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
_
f
i
l
e
,

'
<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
 
=
 
'
 
.
v
a
r
_
e
x
p
o
r
t
(
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
,
 
t
r
u
e
)
.
'
;

'
)
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
E
R
R
O
R
:
 
'
.
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
s
_
f
i
l
e
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
 
=
 
f
a
l
s
e
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

}

