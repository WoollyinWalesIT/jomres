
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
u
s
p
e
n
s
i
o
n
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
t
h
i
s
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
_
i
d
 
=
 
0
;
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
/
/
 
T
h
i
s
 
i
s
 
t
h
e
 
u
s
e
r
i
d
 
i
n
 
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
m
a
n
a
g
e
r
s
.
 
I
t
 
c
o
r
r
e
s
p
o
n
d
s
 
w
i
t
h
 
t
h
e
 
C
M
S
 
u
s
e
r
'
s
 
i
d

 
 
 
 
 
 
 
 
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
 
T
h
i
s
 
i
s
 
t
h
e
 
m
a
n
a
g
e
r
_
u
i
d
 
i
n
 
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
m
a
n
a
g
e
r
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
 
=
 
a
r
r
a
y
(
)
;
 
 
 
/
/
 
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
 
t
h
a
t
 
t
h
i
s
 
m
a
n
a
g
e
r
 
h
a
s
 
a
c
c
e
s
s
 
t
o

	
	
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
 
0
;
	
	
	
	
	
 
 
/
/
 
a
c
c
e
s
s
 
l
e
v
e
l


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
u
s
p
e
n
d
e
d
_
m
a
n
a
g
e
r
_
d
e
n
i
e
d
_
t
a
s
k
s
 
=
 
a
r
r
a
y
(

	
	
	
	
	
	
	
	
	
	
	
	
	
'
p
u
b
l
i
s
h
_
p
r
o
p
e
r
t
y
'
,

	
	
	
	
	
	
	
	
	
	
	
	
	
'
d
o
b
o
o
k
i
n
g
'
,

	
	
	
	
	
	
	
	
	
	
	
	
	
'
l
i
s
t
_
b
o
o
k
i
n
g
s
'
,

	
	
	
	
	
	
	
	
	
	
	
	
	
'
e
d
i
t
_
b
o
o
k
i
n
g
'
,

	
	
	
	
	
	
	
	
	
	
	
	
	
)
;
 
 
/
/
 
b
l
o
c
k
e
d
 
t
a
s
k
s
 
f
o
r
 
s
u
s
p
e
n
d
e
d
 
m
a
n
a
g
e
r
s

 
 
 
 
}


 
 
 
 
/
/
g
e
t
s
 
t
h
e
 
u
s
e
r
i
d
(
c
m
s
 
u
s
e
r
 
i
d
)
 
a
n
d
 
s
e
t
s
 
t
h
e
 
i
d
 
(
m
a
n
a
g
e
r
_
u
i
d
)

 
 
 
 
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
 
s
e
t
_
m
a
n
a
g
e
r
_
i
d
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


 
 
 
 
 
 
 
 
$
t
h
i
s
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
;


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
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
j
o
m
r
e
s
_
u
s
e
r
s
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
g
e
t
_
u
s
e
r
(
$
t
h
i
s
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
_
i
d
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
j
o
m
r
e
s
_
u
s
e
r
s
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
u
t
h
o
r
i
s
e
d
_
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
 
=
 
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
;

	
	
	
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
=
 
$
j
o
m
r
e
s
_
u
s
e
r
s
-
>
a
c
c
e
s
s
l
e
v
e
l
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
s
u
s
p
e
n
d
 
t
h
e
 
u
s
e
r

 
 
 
 
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
 
s
u
s
p
e
n
d
_
m
a
n
a
g
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
s
u
s
p
e
n
d
e
d
`
 
=
 
1
 
W
H
E
R
E
 
`
m
a
n
a
g
e
r
_
u
i
d
`
 
=
 
'
.
$
t
h
i
s
-
>
i
d
;

 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
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
 
'
'
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
m
a
i
l
_
s
u
s
p
e
n
s
i
o
n
_
t
o
_
m
a
n
a
g
e
r
(
)
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


 
 
 
 
/
/
u
n
s
u
s
p
e
n
d
 
t
h
e
 
u
s
e
r

 
 
 
 
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
 
u
n
s
u
s
p
e
n
d
_
m
a
n
a
g
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
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
m
a
n
a
g
e
r
s
 
S
E
T
 
`
s
u
s
p
e
n
d
e
d
`
 
=
 
0
 
W
H
E
R
E
 
`
m
a
n
a
g
e
r
_
u
i
d
`
 
=
 
'
.
$
t
h
i
s
-
>
i
d
;

 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
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
 
'
'
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
e
m
a
i
l
_
u
n
s
u
s
p
e
n
s
i
o
n
_
t
o
_
m
a
n
a
g
e
r
(
)
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


 
 
 
 
/
/
u
n
p
u
b
l
i
s
h
 
t
h
e
 
s
u
s
p
e
n
d
e
d
 
u
s
e
r
 
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
 
u
n
p
u
b
l
i
s
h
_
m
a
n
a
g
e
r
s
_
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
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
<
 
5
0
 
|
|
 
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
9
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
u
t
h
o
r
i
s
e
d
_
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
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
r
o
p
e
r
t
y
s
 
S
E
T
 
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
 
=
 
0
 
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
s
_
u
i
d
`
 
I
N
 
(
'
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
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
)
.
'
)
 
A
N
D
 
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
 
=
 
1
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
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
 
'
'
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
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
 
a
s
 
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
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
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
n
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
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
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
u
n
p
u
b
l
i
s
h
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
p
u
b
l
i
s
h
 
t
h
e
 
u
n
s
u
s
p
e
n
d
e
d
 
u
s
e
r
 
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

 
 
 
 
/
/
m
a
y
b
e
 
t
h
i
s
 
s
h
o
u
l
d
n
`
t
 
b
e
 
d
o
n
e
 
a
u
t
o
m
a
t
i
c
a
l
l
y
,
 
a
s
 
t
h
i
s
 
w
i
l
l
 
a
l
s
o
 
p
u
b
l
i
s
h
 
w
h
a
t
e
v
e
r
 
t
e
s
t
 
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
 
t
h
e
 
m
a
n
a
g
e
r
 
m
a
y
 
h
a
v
e
.
.

 
 
 
 
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
 
p
u
b
l
i
s
h
_
m
a
n
a
g
e
r
s
_
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
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
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
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
<
 
5
0
 
|
|
 
$
t
h
i
s
-
>
a
c
c
e
s
s
l
e
v
e
l
 
>
=
 
9
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
u
t
h
o
r
i
s
e
d
_
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
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
U
P
D
A
T
E
 
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
r
o
p
e
r
t
y
s
 
S
E
T
 
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
 
=
 
1
 
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
s
_
u
i
d
`
 
I
N
 
(
'
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
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
)
.
'
)
 
A
N
D
 
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
 
=
 
0
 
'
;

 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
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
 
'
'
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
t
h
i
s
-
>
a
u
t
h
o
r
i
s
e
d
_
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
 
a
s
 
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
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
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
 
'
L
o
g
s
 
w
h
e
n
 
a
 
p
r
o
p
e
r
t
y
 
i
s
 
p
u
b
l
i
s
h
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
s
e
n
d
 
e
m
a
i
l
 
t
o
 
u
s
e
r
 
t
h
a
t
 
h
i
s
 
a
c
c
o
u
n
t
 
h
a
s
 
b
e
e
n
 
s
u
s
p
e
n
d
e
d

 
 
 
 
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
 
e
m
a
i
l
_
s
u
s
p
e
n
s
i
o
n
_
t
o
_
m
a
n
a
g
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
m
a
i
l
f
r
o
m
'
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
f
r
o
m
n
a
m
e
'
)
;


 
 
 
 
 
 
 
 
$
u
s
e
r
_
d
e
e
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
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
t
h
i
s
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
_
i
d
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
 
=
 
$
u
s
e
r
_
d
e
e
t
s
[
 
$
t
h
i
s
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
_
i
d
 
]
[
 
'
e
m
a
i
l
'
 
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
s
u
b
j
e
c
t
 
=
 
j
r
_
g
e
t
t
e
x
t
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
S
U
S
P
E
N
S
I
O
N
S
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
)
;

 
 
 
 
 
 
 
 
$
b
o
d
y
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
D
E
A
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
D
E
A
R
'
)
.
$
u
s
e
r
_
d
e
e
t
s
[
 
$
t
h
i
s
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
.
"
.
\
r
\
n

	
	
"
 
.
j
r
_
g
e
t
t
e
x
t
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
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
,
 
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
,
 
$
e
m
a
i
l
,
 
$
s
u
b
j
e
c
t
,
 
$
b
o
d
y
,
 
$
m
o
d
e
 
=
 
0
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
s
u
s
p
e
n
s
i
o
n
 
e
m
a
i
l
 
t
o
 
u
s
e
r
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
e
m
a
i
l
.
'
 
S
u
b
j
e
c
t
'
.
$
s
u
b
j
e
c
t
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
s
u
b
j
e
c
t
,
 
$
b
o
d
y
)
;

 
 
 
 
}


 
 
 
 
/
/
s
e
n
d
 
e
m
a
i
l
 
t
o
 
u
s
e
r
 
t
h
a
t
 
h
i
s
 
a
c
c
o
u
n
t
 
h
a
s
 
b
e
e
n
 
u
n
s
u
s
p
e
n
d
e
d

 
 
 
 
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
 
e
m
a
i
l
_
u
n
s
u
s
p
e
n
s
i
o
n
_
t
o
_
m
a
n
a
g
e
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
m
a
i
l
f
r
o
m
'
)
;

 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
 
=
 
g
e
t
_
s
h
o
w
t
i
m
e
(
'
f
r
o
m
n
a
m
e
'
)
;


 
 
 
 
 
 
 
 
$
u
s
e
r
_
d
e
e
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
_
u
s
e
r
s
_
f
r
o
n
t
e
n
d
_
u
s
e
r
d
e
t
a
i
l
s
_
b
y
_
i
d
(
$
t
h
i
s
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
_
i
d
)
;

 
 
 
 
 
 
 
 
$
e
m
a
i
l
 
=
 
$
u
s
e
r
_
d
e
e
t
s
[
 
$
t
h
i
s
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
_
i
d
 
]
[
 
'
e
m
a
i
l
'
 
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
s
u
b
j
e
c
t
 
=
 
j
r
_
g
e
t
t
e
x
t
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
S
U
S
P
E
N
S
I
O
N
S
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
,
 
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
_
T
I
T
L
E
'
)
;

 
 
 
 
 
 
 
 
$
b
o
d
y
 
=
 
j
r
_
g
e
t
t
e
x
t
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
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
D
E
A
R
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
C
O
N
F
I
R
M
A
T
I
O
N
_
D
E
A
R
'
)
.
$
u
s
e
r
_
d
e
e
t
s
[
 
$
t
h
i
s
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
.
"
.
\
r
\
n

	
	
"
 
.
j
r
_
g
e
t
t
e
x
t
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
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
,
 
'
_
J
O
M
R
E
S
_
S
U
S
P
E
N
S
I
O
N
S
_
M
A
N
A
G
E
R
_
U
N
S
U
S
P
E
N
D
E
D
_
E
M
A
I
L
'
)
;


 
 
 
 
 
 
 
 
i
f
 
(
!
j
o
m
r
e
s
M
a
i
l
e
r
(
$
j
o
m
r
e
s
C
o
n
f
i
g
_
m
a
i
l
f
r
o
m
,
 
$
j
o
m
r
e
s
C
o
n
f
i
g
_
f
r
o
m
n
a
m
e
,
 
$
e
m
a
i
l
,
 
$
s
u
b
j
e
c
t
,
 
$
b
o
d
y
,
 
$
m
o
d
e
 
=
 
0
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
r
r
o
r
_
l
o
g
g
i
n
g
(
'
F
a
i
l
u
r
e
 
i
n
 
s
e
n
d
i
n
g
 
u
n
s
u
s
p
e
n
s
i
o
n
 
e
m
a
i
l
 
t
o
 
u
s
e
r
.
 
T
a
r
g
e
t
 
a
d
d
r
e
s
s
:
 
'
.
$
e
m
a
i
l
.
'
 
S
u
b
j
e
c
t
'
.
$
s
u
b
j
e
c
t
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
s
e
n
d
A
d
m
i
n
E
m
a
i
l
(
$
s
u
b
j
e
c
t
,
 
$
b
o
d
y
)
;

 
 
 
 
}


 
 
 
 
/
/
c
h
e
c
k
s
 
i
f
 
t
h
i
s
 
s
u
s
p
e
n
d
e
d
 
u
s
e
r
 
h
a
s
 
h
a
s
 
t
h
e
 
r
i
g
h
t
s
 
t
o
 
a
c
c
e
s
s
 
t
h
i
s
 
t
a
s
k

 
 
 
 
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
 
s
u
s
p
e
n
d
e
d
_
m
a
n
a
g
e
r
_
d
e
n
i
e
d
_
t
a
s
k
(
$
t
a
s
k
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
t
a
s
k
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
n
_
a
r
r
a
y
(
$
t
a
s
k
,
 
$
t
h
i
s
-
>
s
u
s
p
e
n
d
e
d
_
m
a
n
a
g
e
r
_
d
e
n
i
e
d
_
t
a
s
k
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

