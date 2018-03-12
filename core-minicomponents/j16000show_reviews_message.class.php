
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
1
6
0
0
0
s
h
o
w
_
r
e
v
i
e
w
s
_
m
e
s
s
a
g
e

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
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)

 
 
 
 
{

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
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
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
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

 
 
 
 
 
 
 
 
i
f
 
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
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
a
b
l
e
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
'
'
;

	
	

	
	
$
s
i
t
e
C
o
n
f
i
g
 
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
c
o
n
f
i
g
_
s
i
t
e
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
'
)
;

	
	
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;

	
	

	
	
$
j
r
_
r
e
v
i
e
w
_
l
e
f
t
 
=
 
(
i
n
t
)
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
j
r
_
r
e
v
i
e
w
_
l
e
f
t
'
,
 
0
)
;

	
	

	
	
i
f
 
(
$
j
r
_
r
e
v
i
e
w
_
l
e
f
t
 
=
=
 
1
)
 
{

	
	
	
$
s
i
t
e
C
o
n
f
i
g
-
>
u
p
d
a
t
e
_
s
e
t
t
i
n
g
(
'
j
o
m
r
e
s
_
r
e
v
i
e
w
_
l
e
f
t
'
,
 
'
1
'
)
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
o
u
t
p
u
t
_
n
o
w
'
 
]
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
n
o
w
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
}


	
	
$
r
e
v
i
e
w
_
s
i
t
e
s
 
=
 
a
r
r
a
y
 
(

	
	
	
"
c
a
p
t
e
r
r
a
"
 
=
>
 
a
r
r
a
y
 
(
 
"
u
r
l
"
 
=
>
 
'
h
t
t
p
s
:
/
/
w
w
w
.
c
a
p
t
e
r
r
a
.
c
o
m
/
p
/
1
3
4
4
6
9
/
J
o
m
r
e
s
/
'
 
,
 
"
s
i
t
e
_
n
a
m
e
"
 
=
>
 
"
C
a
p
t
e
r
r
a
"
 
)

	
	
)
;


	
	
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
)
 
{

	
	
	
$
r
e
v
i
e
w
_
s
i
t
e
s
[
'
j
o
o
m
l
a
'
]
 
=
 
a
r
r
a
y
 
(
 
"
u
r
l
"
 
=
>
 
'
h
t
t
p
s
:
/
/
e
x
t
e
n
s
i
o
n
s
.
j
o
o
m
l
a
.
o
r
g
/
e
x
t
e
n
s
i
o
n
s
/
e
x
t
e
n
s
i
o
n
/
v
e
r
t
i
c
a
l
-
m
a
r
k
e
t
s
/
b
o
o
k
i
n
g
-
a
-
r
e
s
e
r
v
a
t
i
o
n
s
/
j
o
m
r
e
s
/
'
 
,
 
"
s
i
t
e
_
n
a
m
e
"
 
=
>
 
"
J
o
o
m
l
a
 
E
x
t
e
n
s
i
o
n
 
D
i
r
e
c
t
o
r
y
"
 
)
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
r
e
v
i
e
w
_
s
i
t
e
s
[
'
w
o
r
d
p
r
e
s
s
'
]
 
=
 
a
r
r
a
y
 
(
 
"
u
r
l
"
 
=
>
 
'
h
t
t
p
s
:
/
/
w
o
r
d
p
r
e
s
s
.
o
r
g
/
s
u
p
p
o
r
t
/
p
l
u
g
i
n
/
j
o
m
r
e
s
/
r
e
v
i
e
w
s
/
'
 
,
 
"
s
i
t
e
_
n
a
m
e
"
 
=
>
 
"
W
o
r
d
p
r
e
s
s
 
r
e
p
o
s
i
t
o
r
y
"
 
)
;

	
	
}

	
	

	
	
$
m
e
s
s
a
g
e
 
=
 
'
'
;


	
	
i
f
 
(
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
"
t
a
s
k
"
)
 
=
=
 
"
c
p
a
n
e
l
"
 
&
&
 
$
j
r
C
o
n
f
i
g
[
'
j
o
m
r
e
s
_
r
e
v
i
e
w
_
l
e
f
t
'
]
 
=
=
 
'
0
'
 
&
&
 
$
j
r
_
r
e
v
i
e
w
_
l
e
f
t
 
=
=
 
0
)
 
{


	
	
	
$
m
e
s
s
a
g
e
 
=
 
'

<
p
 
c
l
a
s
s
=
"
a
l
e
r
t
 
a
l
e
r
t
-
s
u
c
c
e
s
s
"
>
I
f
 
y
o
u
 
l
i
k
e
 
J
o
m
r
e
s
,
 
p
l
e
a
s
e
 
c
o
n
s
i
d
e
r
 
l
e
a
v
i
n
g
 
a
 
r
e
v
i
e
w
 
o
n
 
o
n
e
 
o
f
 
t
h
e
s
e
 
s
i
t
e
s
 
'
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
r
e
v
i
e
w
_
s
i
t
e
s
 
a
s
 
$
s
i
t
e
 
)
 
{

	
	
	
	
$
m
e
s
s
a
g
e
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
$
s
i
t
e
[
'
u
r
l
'
]
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
d
e
f
a
u
l
t
"
 
t
a
r
g
e
t
=
"
_
b
l
a
n
k
"
>
'
.
$
s
i
t
e
[
'
s
i
t
e
_
n
a
m
e
'
]
.
'
<
/
a
>
&
n
b
s
p
;
'
;

	
	
	
}

	
	
	

	
	
	
$
m
e
s
s
a
g
e
 
.
=
 
'
<
a
 
h
r
e
f
=
"
'
.
j
o
m
r
e
s
U
r
l
(
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
j
r
_
r
e
v
i
e
w
_
l
e
f
t
=
1
'
)
.
'
"
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
s
u
c
c
e
s
s
"
>
I
`
m
 
a
 
n
i
c
e
 
p
e
r
s
o
n
,
 
i
`
v
e
 
a
l
r
e
a
d
y
 
l
e
f
t
 
a
 
r
e
v
i
e
w
<
/
a
>
'
;

	
	
	
$
m
e
s
s
a
g
e
 
.
=
 
'
<
/
p
>
'
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
m
e
s
s
a
g
e
 
=
 
'
'
;

	
	
}

	
	

	
	
i
f
 
(
$
o
u
t
p
u
t
_
n
o
w
)
 
{

	
	
	
e
c
h
o
 
$
m
e
s
s
a
g
e
;

	
	
}
 
e
l
s
e
 
{

	
	
	
$
t
h
i
s
-
>
r
e
t
V
a
l
s
 
=
 
$
m
e
s
s
a
g
e
;

	
	
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
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
R
e
t
V
a
l
s
(
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
r
e
t
V
a
l
s
;

 
 
 
 
}

}

