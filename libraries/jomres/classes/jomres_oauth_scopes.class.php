
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
o
a
u
t
h
_
s
c
o
p
e
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
$
c
w
d
 
=
 
"
"
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
f
a
u
l
t
_
s
c
o
p
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
s
c
o
p
e
s
_
f
i
l
e
	
=
 
"
s
c
o
p
e
s
.
j
s
o
n
"
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
_
s
c
o
p
e
s
_
f
i
l
e
(
)
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
 
g
e
t
_
s
c
o
p
e
s
_
f
i
l
e
(
)

	
	
{

	
	
$
a
l
r
e
a
d
y
_
f
o
u
n
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

	
	

	
	
$
j
r
e
P
a
t
h
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
J
O
M
R
E
S
_
C
O
R
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
;

	
	
$
c
o
r
e
_
p
l
u
g
i
n
s
_
d
i
r
_
c
o
n
t
e
n
t
s
 
=
 
s
c
a
n
d
i
r
(
$
j
r
e
P
a
t
h
)
;

	
	
$
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
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

	
	
f
o
r
e
a
c
h
 
(
$
c
o
r
e
_
p
l
u
g
i
n
s
_
d
i
r
_
c
o
n
t
e
n
t
s
 
a
s
 
$
d
i
r
e
c
t
o
r
y
 
)

	
	
	
{

	
	
	
i
f
 
(
 
s
u
b
s
t
r
(
$
d
i
r
e
c
t
o
r
y
,
0
 
,
 
1
2
 
)
 
=
=
 
"
a
p
i
_
f
e
a
t
u
r
e
_
"
)

	
	
	
	
$
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
[
]
 
=
 
a
r
r
a
y
(
 
"
p
a
t
h
"
 
=
>
 
$
j
r
e
P
a
t
h
 
,
 
"
s
u
b
_
d
i
r
e
c
t
o
r
y
"
 
=
>
 
$
d
i
r
e
c
t
o
r
y
 
)
;

	
	
	
}

	
	

	
	

	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
a
p
i
_
p
l
g
u
i
n
s
 
=
 
J
O
M
R
E
S
_
R
E
M
O
T
E
P
L
U
G
I
N
S
_
A
B
S
P
A
T
H
;

	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
p
l
u
g
i
n
s
_
d
i
r
_
c
o
n
t
e
n
t
s
 
=
 
s
c
a
n
d
i
r
(
$
t
h
i
r
d
_
p
a
r
t
y
_
a
p
i
_
p
l
g
u
i
n
s
)
;

	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
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
r
d
_
p
a
r
t
y
_
p
l
u
g
i
n
s
_
d
i
r
_
c
o
n
t
e
n
t
s
 
a
s
 
$
d
i
r
e
c
t
o
r
y
 
)

	
	
	
{

	
	
	
i
f
 
(
 
s
u
b
s
t
r
(
$
d
i
r
e
c
t
o
r
y
,
0
 
,
 
1
2
 
)
 
=
=
 
"
a
p
i
_
f
e
a
t
u
r
e
_
"
)

	
	
	
	
$
t
h
i
r
d
_
p
a
r
t
y
_
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
[
]
 
=
 
 
a
r
r
a
y
(
 
"
p
a
t
h
"
 
=
>
 
$
t
h
i
r
d
_
p
a
r
t
y
_
a
p
i
_
p
l
g
u
i
n
s
 
,
 
"
s
u
b
_
d
i
r
e
c
t
o
r
y
"
 
=
>
 
$
d
i
r
e
c
t
o
r
y
 
)
;

	
	
	
}

	
	

	
	
$
a
l
l
_
p
l
u
g
i
n
s
 
=
 
a
r
r
a
y
_
m
e
r
g
e
(
$
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
 
,
 
$
t
h
i
r
d
_
p
a
r
t
y
_
a
p
i
_
f
e
a
t
u
r
e
_
d
i
r
e
c
t
o
r
i
e
s
 
)
;


	
	
$
s
c
o
p
e
_
f
i
l
e
_
c
o
n
t
e
n
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

	
	
i
f
 
(
c
o
u
n
t
(
$
a
l
l
_
p
l
u
g
i
n
s
)
 
>
 
0
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
a
l
l
_
p
l
u
g
i
n
s
 
a
s
 
$
d
i
r
)

	
	
	
	
{

	
	
	
	
/
/
 
A
n
 
a
p
i
 
f
e
a
t
u
r
e
 
c
a
n
 
b
e
 
c
o
n
f
i
g
u
r
e
d
 
a
s
 
a
u
t
h
_
f
r
e
e
 
(
 
i
n
 
o
t
h
e
r
 
w
o
r
d
s
,
 
c
l
i
e
n
t
 
s
e
r
v
i
c
e
s
 
d
o
 
n
o
t
 
n
e
e
d
 
t
o
 
s
e
n
d
 
O
a
u
t
h
 
a
p
i
 
k
e
y
 
p
a
i
r
s
 
t
o
 
u
s
e
 
t
h
e
 
e
n
d
p
o
i
n
t
 
)
 
t
h
r
o
u
g
h
 
t
h
e
 
a
d
d
i
t
i
o
n
 
o
f
 
a
n
 
a
u
t
h
_
f
r
e
e
.
j
s
o
n
 
f
i
l
e
 
t
o
 
i
t
'
s
 
p
l
u
g
i
n
 
d
i
r
e
c
t
o
r
y
.
 

	
	
	
	
/
/
 
I
f
 
t
h
e
 
a
p
i
 
f
e
a
t
u
r
e
 
i
s
 
a
u
t
h
_
f
r
e
e
 
t
h
e
n
 
i
t
 
s
h
o
u
l
d
n
'
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
 
t
h
e
 
s
c
o
p
e
s
 
l
i
s
t
,
 
r
e
g
a
r
d
l
e
s
s
 
o
f
 
i
t
'
s
 
s
c
o
p
e
s
 
f
i
l
e
.

	
	
	
	
$
j
s
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
j
s
o
n
-
>
a
u
t
h
_
f
r
e
e
 
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
d
i
r
[
'
p
a
t
h
'
]
.
$
d
i
r
[
'
s
u
b
_
d
i
r
e
c
t
o
r
y
'
]
.
J
R
D
S
.
'
a
u
t
h
_
f
r
e
e
.
j
s
o
n
'
)
 
)
 
{

	
	
	
	
	
$
j
s
o
n
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
f
i
l
e
_
g
e
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
d
i
r
[
'
p
a
t
h
'
]
.
$
d
i
r
[
'
s
u
b
_
d
i
r
e
c
t
o
r
y
'
]
.
J
R
D
S
.
'
a
u
t
h
_
f
r
e
e
.
j
s
o
n
'
)
)
;

	
	
	
	
}


	
	
	
	
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
d
i
r
[
'
p
a
t
h
'
]
.
$
d
i
r
[
'
s
u
b
_
d
i
r
e
c
t
o
r
y
'
]
.
J
R
D
S
.
$
t
h
i
s
-
>
s
c
o
p
e
s
_
f
i
l
e
)
 
&
&
 
(
 
!
$
j
s
o
n
-
>
a
u
t
h
_
f
r
e
e
 
|
|
 
!
i
s
s
e
t
(
$
j
s
o
n
-
>
a
u
t
h
_
f
r
e
e
)
 
)
 
)
 

	
	
	
	
	
{

	
	
	
	
	
$
s
c
o
p
e
_
f
i
l
e
_
c
o
n
t
e
n
t
s
[
]
 
=
 
j
s
o
n
_
d
e
c
o
d
e
(
f
i
l
e
_
g
e
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
d
i
r
[
'
p
a
t
h
'
]
.
$
d
i
r
[
'
s
u
b
_
d
i
r
e
c
t
o
r
y
'
]
.
J
R
D
S
.
$
t
h
i
s
-
>
s
c
o
p
e
s
_
f
i
l
e
)
)
;

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
	

	
	
i
f
 
(
c
o
u
n
t
(
$
s
c
o
p
e
_
f
i
l
e
_
c
o
n
t
e
n
t
s
)
 
>
 
0
 
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
s
c
o
p
e
_
f
i
l
e
_
c
o
n
t
e
n
t
s
 
a
s
 
$
k
e
y
 
=
>
 
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
c
o
u
n
t
(
$
v
a
l
u
e
)
>
0
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
v
a
l
u
e
 
a
s
 
$
k
=
>
$
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
v
 
a
s
 
$
s
c
o
p
e
)

	
	
	
	
	
	
	
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
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
s
c
o
p
e
,
$
a
l
r
e
a
d
y
_
f
o
u
n
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
d
e
f
a
u
l
t
_
s
c
o
p
e
s
[
$
k
]
[
]
 
=
 
$
s
c
o
p
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
l
r
e
a
d
y
_
f
o
u
n
d
[
]
 
=
 
$
s
c
o
p
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

	
	
	
	
	
	
	
}

	
	
	
	
	
	
}

	
	
	
	
	
}

	
	
	
	
}

	
	
	
}

	
	
}

	
	

	
}

