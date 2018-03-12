
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l

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
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
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

 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
 
=
 
f
a
l
s
e
;


	
	
/
/
c
o
n
t
r
o
l
l
e
d
 
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
s

	
	
$
t
h
i
s
-
>
c
o
n
t
r
o
l
l
e
d
 
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
c
o
n
t
r
o
l
l
a
b
l
e
 
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
s
 
a
n
d
 
m
i
n
 
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
 
r
e
q
u
i
r
e
d
 
f
o
r
 
e
a
c
h

	
	
$
t
h
i
s
-
>
c
o
n
t
r
o
l
l
a
b
l
e
_
p
a
t
t
e
r
n
s
 
=
 
a
r
r
a
y
(

	
	
	
'
0
6
0
0
0
'
 
=
>
 
'
0
'
,
 
/
/
p
u
b
l
i
c
 
t
a
s
k
s
 

	
	
	
'
0
6
0
0
1
'
 
=
>
 
'
5
0
'
,
 
/
/
r
e
c
e
p
t
i
o
n
 
t
a
s
k
s

	
	
	
'
0
6
0
0
2
'
 
=
>
 
'
7
0
'
,
 
/
/
m
a
n
a
g
e
r
 
t
a
s
k
s

	
	
	
'
0
6
0
0
5
'
 
=
>
 
'
1
'
,
 
/
/
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
 
t
a
s
k
s

	
	
	
'
0
1
0
0
4
'
 
=
>
 
'
0
'
,
 
/
/
p
r
o
p
e
r
t
y
 
l
i
s
t
 
v
i
e
w
s

	
	
	
'
0
0
0
3
5
'
 
=
>
 
'
0
'
 
/
/
p
r
o
p
e
r
t
y
 
d
e
t
a
i
l
s
 
t
a
b
s

	
	
)
;

	
	

	
	
/
/
u
n
c
o
n
t
r
o
l
l
a
b
l
e
 
t
a
s
k
 
n
a
m
e
s

	
	
$
t
h
i
s
-
>
u
n
c
o
n
t
r
o
l
l
a
b
l
e
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
i
m
m
e
d
i
a
t
e
p
a
y
'
,

	
	
	
'
e
d
i
t
o
r
'
,

	
	
	
'
c
o
n
f
i
r
m
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
c
o
m
p
l
e
t
e
b
k
'
,
	
	
	

	
	
	
'
e
r
r
o
r
'
,

	
	
	
'
b
a
c
k
g
r
o
u
n
d
_
p
r
o
c
e
s
s
'
,

	
	
	
'
c
p
a
n
e
l
'

	
	
)
;

	
	

	
	
/
/
u
n
c
o
n
t
r
o
l
l
a
b
l
e
 
t
a
s
k
 
p
a
t
t
e
r
n
s
.
 
i
f
 
t
a
s
k
 
n
a
m
e
s
 
m
a
t
c
h
 
t
h
e
s
e
 
p
a
t
t
e
r
s
,
 
t
h
e
 
t
a
s
k
s
 
c
a
n
`
t
 
b
e
 
c
o
n
t
r
o
l
l
e
d
 
m
a
n
u
a
l
l
y
 
b
y
 
u
s
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
u
n
c
o
n
t
r
o
l
l
a
b
l
e
_
p
a
t
t
e
r
n
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
a
y
m
e
n
t
'
,
 

	
	
	
'
i
n
s
e
r
t
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
h
a
n
d
l
'
,
 

	
	
	
'
c
r
o
n
'
,

	
	
	
'
a
j
a
x
'
,

	
	
	
'
b
e
d
s
2
4
'
,

	
	
	
'
o
a
u
t
h
'
,

	
	
	
'
g
e
t
_
'

	
	
)
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
 
d
r
o
p
d
o
w
n
 
o
p
t
i
o
n
s

	
	
$
t
h
i
s
-
>
o
p
t
i
o
n
s
 
=
 
f
a
l
s
e
;


	
	
/
/
g
e
t
 
c
u
r
r
e
n
t
l
y
 
c
o
n
t
r
o
l
l
e
d
 
t
a
s
k
s

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
_
i
n
i
t
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
 
_
_
s
e
t
(
$
s
e
t
t
i
n
g
,
 
$
v
a
l
u
e
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
S
e
t
t
i
n
g
 
'
.
$
s
e
t
t
i
n
g
.
'
 
t
o
 
'
.
$
v
a
l
u
e
.
'
 
<
b
r
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
 
=
 
$
v
a
l
u
e
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
g
e
t
(
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
e
l
f
:
:
$
i
n
t
e
r
n
a
l
_
d
e
b
u
g
g
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
G
e
t
t
i
n
g
 
'
.
$
s
e
t
t
i
n
g
.
'
 
w
h
i
c
h
 
i
s
 
'
.
$
t
h
i
s
-
>
$
s
e
t
t
i
n
g
.
'
<
b
r
>
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
t
h
i
s
-
>
$
s
e
t
t
i
n
g
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
$
s
e
t
t
i
n
g
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

	

	
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
_
i
n
i
t
(
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
s
c
r
i
p
t
n
a
m
e
`
,
 
`
a
c
c
e
s
s
_
l
e
v
e
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
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
c
o
n
t
r
o
l
l
e
d
[
 
$
r
-
>
s
c
r
i
p
t
n
a
m
e
 
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
a
c
c
e
s
s
_
l
e
v
e
l
;

	
	
	
}

	
	
}

 
 
 
 
}


 
 
 
 
p
r
i
v
a
t
e
 
f
u
n
c
t
i
o
n
 
d
e
l
e
t
e
_
c
o
n
t
r
o
l
l
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
 
"
D
E
L
E
T
E
 
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
W
H
E
R
E
 
`
s
c
r
i
p
t
n
a
m
e
`
 
=
 
'
"
.
$
t
a
s
k
.
"
'
"
;

 
 
 
 
 
 
 
 

	
	
i
f
 
(
!
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
U
n
a
b
l
e
 
t
o
 
d
e
l
e
t
e
 
f
r
o
m
 
a
c
c
e
s
s
 
c
o
n
t
r
o
l
 
t
a
b
l
e
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
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

	
	

	
	
u
n
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
n
t
r
o
l
l
e
d
[
$
t
a
s
k
]
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
p
d
a
t
e
_
t
a
s
k
_
a
c
c
e
s
s
_
l
e
v
e
l
(
$
t
a
s
k
 
=
 
'
'
,
 
$
a
c
c
e
s
s
_
l
e
v
e
l
 
=
 
'
-
1
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
 
t
r
u
e
;

	
	
}

	
	

	
	
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
t
h
i
s
-
>
c
o
n
t
r
o
l
l
e
d
[
$
t
a
s
k
]
)
)
 
{

	
	
	
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
 
c
h
a
n
g
e
d
 
t
o
 
d
e
f
a
u
l
t
,
 
s
o
 
n
o
 
n
e
e
d
 
t
o
 
h
a
v
e
 
t
h
i
s
 
t
a
s
k
 
i
n
 
t
h
e
 
a
c
c
e
s
s
 
c
o
n
t
r
o
l
 
t
a
b
l
e
 
a
n
y
m
o
r
e

	
	
	
i
f
 
(
$
a
c
c
e
s
s
_
l
e
v
e
l
 
=
=
 
'
-
1
'
)
 
{

	
	
	
	
$
t
h
i
s
-
>
d
e
l
e
t
e
_
c
o
n
t
r
o
l
l
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
 
e
l
s
e
 
{
 
/
/
u
p
d
a
t
e
 
e
x
i
s
t
i
n
g
 
t
a
s
k
 
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
q
u
e
r
y
 
=
 
"
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
S
E
T
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
 
=
 
'
"
.
$
a
c
c
e
s
s
_
l
e
v
e
l
.
"
'
 
W
H
E
R
E
 
`
s
c
r
i
p
t
n
a
m
e
`
 
=
 
'
"
.
$
t
a
s
k
.
"
'
"
;

	
	
	
	

	
	
	
	
i
f
 
(
!
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
"
E
r
r
o
r
 
s
a
v
i
n
g
 
n
e
w
 
a
c
c
e
s
s
 
c
o
n
t
r
o
l
 
l
e
v
e
l
 
$
n
e
w
_
l
e
v
e
l
 
f
o
r
 
$
m
i
n
i
c
o
m
p
"
,
 
'
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
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

	
	
	
	

	
	
	
	
$
t
h
i
s
-
>
c
o
n
t
r
o
l
l
e
d
[
 
$
t
a
s
k
 
]
 
=
 
(
i
n
t
)
$
a
c
c
e
s
s
_
l
e
v
e
l
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

	
	
}
 
e
l
s
e
 
{
 
/
/
t
a
s
k
 
w
a
s
n
`
t
 
a
l
r
e
a
d
y
 
c
o
n
t
r
o
l
l
e
d

	
	
	
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
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
a
c
c
e
s
s
_
c
o
n
t
r
o
l
 
(
`
s
c
r
i
p
t
n
a
m
e
`
,
 
`
a
c
c
e
s
s
_
l
e
v
e
l
`
)
 
V
A
L
U
E
S
 
(
'
"
.
$
t
a
s
k
.
"
'
,
 
'
"
.
$
a
c
c
e
s
s
_
l
e
v
e
l
.
"
'
)
"
;

	
	
	

	
	
	
i
f
 
(
!
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
U
n
a
b
l
e
 
t
o
 
i
n
s
e
r
t
 
i
n
t
o
 
a
c
c
e
s
s
 
c
o
n
t
r
o
l
 
t
a
b
l
e
,
 
m
y
s
q
l
 
d
b
 
f
a
i
l
u
r
e
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

	
	
	

	
	
	
$
t
h
i
s
-
>
c
o
n
t
r
o
l
l
e
d
[
 
$
t
a
s
k
 
]
 
=
 
(
i
n
t
)
$
a
c
c
e
s
s
_
l
e
v
e
l
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


	
/
/
c
h
e
c
k
 
i
f
 
a
 
u
s
e
r
 
c
a
n
 
a
c
c
e
s
s
 
a
 
s
p
e
c
i
f
i
c
 
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
 
t
h
i
s
_
u
s
e
r
_
c
a
n
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
u
n
c
o
n
t
r
o
l
l
a
b
l
e
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
c
o
n
t
r
o
l
l
e
d
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
n
t
r
o
l
l
e
d
[
$
t
a
s
k
]
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
t
h
i
s
J
R
U
s
e
r
 
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
r
_
u
s
e
r
'
)
;

	
	

	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
f
a
l
s
e
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
t
h
i
s
-
>
c
o
n
t
r
o
l
l
e
d
[
$
t
a
s
k
]
)
)
 
{

	
	
	
s
w
i
t
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
c
o
n
t
r
o
l
l
e
d
[
$
t
a
s
k
]
)
 
{

	
	
	
	
c
a
s
e
 
-
1
:
 
/
/
d
e
f
a
u
l
t

	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
0
:
 
/
/
p
u
b
l
i
c

	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
1
:
 
/
/
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

	
	
	
	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
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
 
1
)
 
{

	
	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
}

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
5
0
:
 
/
/
r
e
c
e
p
t
i
o
n

	
	
	
	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
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
 
5
0
)
 
{

	
	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
}

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
7
0
:
 
/
/
m
a
n
a
g
e
r

	
	
	
	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
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
 
7
0
)
 
{

	
	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
}

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
9
0
:
 
/
/
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r

	
	
	
	
	
i
f
 
(
$
t
h
i
s
J
R
U
s
e
r
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

	
	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
}

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
c
a
s
e
 
-
2
:
 
/
/
n
o
b
o
d
y

	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
f
a
l
s
e
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
	
d
e
f
a
u
l
t
:

	
	
	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
t
r
u
e
;

	
	
	
	
	
b
r
e
a
k
;

	
	
	
}

	
	
}
 
e
l
s
e
 
{

	
	
	
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
 
=
 
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
 
$
u
s
e
r
_
c
a
n
_
a
c
c
e
s
s
;

 
 
 
 
}


	
/
/
n
o
t
 
u
s
e
d
 
b
u
t
 
h
e
r
e
 
i
s
 
s
o
m
e
b
o
d
y
 
w
a
n
t
s
 
t
o
 
d
o
 
t
h
i
s
 
f
o
r
 
s
o
m
e
 
r
e
a
s
o
n
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
 
r
e
c
o
u
n
t
_
c
o
n
t
r
o
l
l
e
d
_
s
c
r
i
p
t
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
_
i
n
i
t
(
)
;

 
 
 
 
}


	
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
s
 
d
r
o
p
d
o
w
n

 
 
 
 
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
n
e
r
a
t
e
_
a
c
c
e
s
s
_
c
o
n
t
r
o
l
_
d
r
o
p
d
o
w
n
(
$
t
a
s
k
 
=
 
'
'
,
 
$
m
i
n
_
a
c
c
e
s
s
_
l
e
v
e
l
 
=
 
0
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
 
'
'
;

	
	
}


	
	
/
/
c
h
e
c
k
 
i
f
 
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
 
d
r
o
p
d
o
w
n
 
o
p
t
i
o
n
s
 
a
r
e
 
s
e
t

	
	
i
f
 
(
!
$
t
h
i
s
-
>
o
p
t
i
o
n
s
)
 
{

	
	
	
$
t
h
i
s
-
>
o
p
t
i
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
o
p
t
i
o
n
s
[
'
-
1
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
-
1
'
,
 
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
D
E
F
A
U
L
T
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
D
E
F
A
U
L
T
'
)
)
;

	
	
	
$
t
h
i
s
-
>
o
p
t
i
o
n
s
[
'
0
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
,
 
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
A
N
Y
B
O
D
Y
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
A
N
Y
B
O
D
Y
'
)
)
;

	
	
	
$
t
h
i
s
-
>
o
p
t
i
o
n
s
[
'
1
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
,
 
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
G
I
S
T
E
R
E
D
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
G
I
S
T
E
R
E
D
'
)
)
;

	
	
	
$
t
h
i
s
-
>
o
p
t
i
o
n
s
[
'
5
0
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
5
0
'
,
 
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
C
E
P
T
I
O
N
I
S
T
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
R
E
C
E
P
T
I
O
N
I
S
T
'
)
)
;

	
	
	
$
t
h
i
s
-
>
o
p
t
i
o
n
s
[
'
7
0
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
7
0
'
,
 
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
M
A
N
A
G
E
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
M
A
N
A
G
E
R
'
)
)
;

	
	
	
$
t
h
i
s
-
>
o
p
t
i
o
n
s
[
'
9
0
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
9
0
'
,
 
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
S
U
P
E
R
M
A
N
A
G
E
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
S
U
P
E
R
M
A
N
A
G
E
R
'
)
)
;

	
	
	
$
t
h
i
s
-
>
o
p
t
i
o
n
s
[
'
-
2
'
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
-
2
'
,
 
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
N
O
B
O
D
Y
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
A
C
C
E
S
S
_
C
O
N
T
R
O
L
_
L
E
V
E
L
S
_
N
O
B
O
D
Y
'
)
)
;

	
	
}

	
	

	
	
$
o
p
t
i
o
n
s
 
=
 
$
t
h
i
s
-
>
o
p
t
i
o
n
s
;

	
	

	
	
/
/
t
h
e
 
d
r
o
p
d
o
w
n
 
s
h
o
u
l
d
 
h
a
v
e
 
o
n
l
y
 
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
s
 
v
a
l
i
d
 
f
o
r
 
t
h
i
s
 
t
a
s
k
 
e
v
e
n
t
 
p
o
i
n
t

	
	
s
w
i
t
c
h
 
(
(
s
t
r
i
n
g
)
$
m
i
n
_
a
c
c
e
s
s
_
l
e
v
e
l
)
 
{

	
	
	
c
a
s
e
 
'
0
'
:

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
1
'
:

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
0
'
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
5
0
'
:

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
0
'
]
)
;

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
1
'
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
7
0
'
:

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
0
'
]
)
;

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
1
'
]
)
;

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
5
0
'
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
c
a
s
e
 
'
9
0
'
:

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
0
'
]
)
;

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
1
'
]
)
;

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
5
0
'
]
)
;

	
	
	
	
u
n
s
e
t
(
$
o
p
t
i
o
n
s
[
'
7
0
'
]
)
;

	
	
	
	
b
r
e
a
k
;

	
	
	
d
e
f
a
u
l
t
:

	
	
	
	
b
r
e
a
k
;

	
	
}


	
	
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
t
h
i
s
-
>
c
o
n
t
r
o
l
l
e
d
[
$
t
a
s
k
]
)
)
 
{

	
	
	
$
c
u
r
r
e
n
t
_
l
e
v
e
l
 
=
 
(
s
t
r
i
n
g
)
$
t
h
i
s
-
>
c
o
n
t
r
o
l
l
e
d
[
$
t
a
s
k
]
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
c
u
r
r
e
n
t
_
l
e
v
e
l
 
=
 
'
-
1
'
;

	
	
}


 
 
 
 
 
 
 
 
$
j
a
v
a
s
c
r
i
p
t
 
=
 
'
o
n
C
h
a
n
g
e
=
"
c
h
a
n
g
e
_
a
c
c
e
s
s
_
l
e
v
e
l
(
\
'
'
.
$
t
a
s
k
.
'
\
'
,
t
h
i
s
.
v
a
l
u
e
)
"
;
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
'
'
,
 
'
 
a
u
t
o
c
o
m
p
l
e
t
e
=
"
o
f
f
"
 
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
 
'
.
$
j
a
v
a
s
c
r
i
p
t
.
'
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
c
u
r
r
e
n
t
_
l
e
v
e
l
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
 
i
f
 
a
 
t
a
s
k
 
i
s
 
c
o
n
t
r
o
l
l
a
b
l
e
 
(
s
o
m
e
 
t
a
s
k
s
 
a
r
e
 
n
o
t
 
c
o
n
t
r
o
l
l
a
b
l
e
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
 
i
s
_
c
o
n
t
r
o
l
l
a
b
l
e
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
u
n
c
o
n
t
r
o
l
l
a
b
l
e
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
 
f
a
l
s
e
;

	
	
}

	
	

	
	
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
u
n
c
o
n
t
r
o
l
l
a
b
l
e
_
p
a
t
t
e
r
n
s
 
a
s
 
$
p
a
t
t
e
r
n
)
 
{

	
	
	
i
f
 
(
s
t
r
p
o
s
(
$
t
a
s
k
,
 
$
p
a
t
t
e
r
n
)
 
!
=
=
 
f
a
l
s
e
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

