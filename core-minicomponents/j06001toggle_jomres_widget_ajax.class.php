
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
0
6
0
0
1
t
o
g
g
l
e
_
j
o
m
r
e
s
_
w
i
d
g
e
t
_
a
j
a
x

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
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
)
;

	
	

	
	
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
,
 
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
u
t
h
o
r
i
s
e
d
P
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

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}

	
	

	
	
$
r
e
s
p
o
n
s
e
 
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
c
o
n
t
e
n
t
 
=
 
'
'
;


 
 
 
 
 
 
 
 
$
j
r
_
w
i
d
g
e
t
 
=
 
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
G
E
T
,
 
'
j
r
_
w
i
d
g
e
t
'
,
 
'
'
)
;

	
	
$
j
r
_
w
i
d
g
e
t
_
e
n
a
b
l
e
d
 
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
G
E
T
,
 
'
j
r
_
w
i
d
g
e
t
_
e
n
a
b
l
e
d
'
,
 
0
)
;

	
	
$
j
r
_
w
i
d
g
e
t
_
c
o
l
u
m
n
 
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
G
E
T
,
 
'
j
r
_
w
i
d
g
e
t
_
c
o
l
u
m
n
'
,
 
1
)
;

	
	
$
j
r
_
w
i
d
g
e
t
_
p
o
s
i
t
i
o
n
 
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
G
E
T
,
 
'
j
r
_
w
i
d
g
e
t
_
p
o
s
i
t
i
o
n
'
,
 
0
)
;


	
	
$
o
r
d
e
r
 
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
_
w
i
d
g
e
t
_
o
r
d
e
r
 
=
 
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
G
E
T
,
 
'
j
r
_
w
i
d
g
e
t
_
o
r
d
e
r
'
,
 
'
'
)
;

	
	
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
 
(
"
,
"
,
$
j
r
_
w
i
d
g
e
t
_
o
r
d
e
r
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
b
a
n
g
)
)
 
{

	
	
	
f
o
r
 
(
$
i
=
0
;
$
i
<
=
c
o
u
n
t
(
$
b
a
n
g
)
;
$
i
+
+
)
 
{

	
	
	
	
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
b
a
n
g
[
$
i
]
)
 
&
&
 
t
r
i
m
(
$
b
a
n
g
[
$
i
]
)
 
!
=
 
'
'
 
)
 
{

	
	
	
	
	
$
o
r
d
e
r
[
]
 
=
 
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
b
a
n
g
,
 
$
i
,
 
'
'
)
;

	
	
	
	
}

	
	
	
}

	
	
}


 
 
 
 
 
 
 
 
$
j
o
m
r
e
s
_
w
i
d
g
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
w
i
d
g
e
t
s
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
_
w
i
d
g
e
t
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
 
/
/
w
e
 
n
e
e
d
 
t
o
 
s
e
t
 
t
h
i
s
 
s
o
 
w
e
`
l
l
 
b
e
 
s
u
r
e
 
w
e
`
l
l
 
g
e
t
/
s
e
t
 
j
u
s
t
 
t
h
e
 
e
n
a
b
l
e
d
 
w
i
d
g
e
t
s
 
f
o
r
 
t
h
i
s
 
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
.
 
O
t
h
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
 
m
a
y
 
h
a
v
e
 
o
t
h
e
r
 
w
i
d
g
e
t
s
 
e
n
a
b
l
e
d


	
	
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
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
w
i
d
g
e
t
s
[
$
j
r
_
w
i
d
g
e
t
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
;

	
	
}


	
	
/
/
g
e
t
 
a
l
l
 
e
n
a
b
l
e
d
 
w
i
d
g
e
t
s

	
	
i
f
 
(
!
$
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
g
e
t
_
w
i
d
g
e
t
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
)
)
 
{

	
	
	
r
e
t
u
r
n
;

	
	
}

	
	

	
	
/
/
s
a
v
e
 
u
s
e
r
 
w
i
d
g
e
t
s
 
p
a
r
a
m
s

	
	
i
f
 
(
!
$
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
t
o
g
g
l
e
_
w
i
d
g
e
t
(
$
j
r
_
w
i
d
g
e
t
,
 
$
j
r
_
w
i
d
g
e
t
_
e
n
a
b
l
e
d
,
 
$
j
r
_
w
i
d
g
e
t
_
c
o
l
u
m
n
,
 
$
o
r
d
e
r
 
)
)
 
{

	
	
	
r
e
t
u
r
n
;

	
	
}


	
	
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
 
=
 
a
r
r
a
y
(

	
	
	
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
 
=
>
 
f
a
l
s
e
,

	
	
	
'
i
s
_
w
i
d
g
e
t
'
 
=
>
 
t
r
u
e

	
	
)
;

	
	

	
	
i
f
 
(
$
j
r
_
w
i
d
g
e
t
_
e
n
a
b
l
e
d
 
=
=
 
1
)
 
{

	
	
	
$
w
i
d
g
e
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
w
i
d
g
e
t
[
'
J
R
_
W
I
D
G
E
T
_
T
A
S
K
'
]
 
=
 
$
j
r
_
w
i
d
g
e
t
;


	
	
	
/
/
$
w
i
d
g
e
t
[
'
W
I
D
G
E
T
_
S
H
O
R
T
C
O
D
E
'
]
 
=
 
'
{
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
 
'
.
$
j
r
_
w
i
d
g
e
t
.
'
}
'
;

	
	
	
$
w
i
d
g
e
t
[
'
W
I
D
G
E
T
_
S
H
O
R
T
C
O
D
E
'
]
 
=
 
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
s
p
e
c
i
f
i
c
E
v
e
n
t
(
$
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
w
i
d
g
e
t
s
[
$
j
r
_
w
i
d
g
e
t
]
[
'
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
'
]
,
 
$
j
r
_
w
i
d
g
e
t
,
 
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
;

	
	
	

	
	
	
$
w
i
d
g
e
t
[
'
W
I
D
G
E
T
_
T
I
T
L
E
'
]
 
=
 
$
j
o
m
r
e
s
_
w
i
d
g
e
t
s
-
>
w
i
d
g
e
t
s
[
$
j
r
_
w
i
d
g
e
t
]
[
'
t
i
t
l
e
'
]
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
[
]
 
=
 
$
w
i
d
g
e
t
;

	
	
	
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

	
	
	
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
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
L
A
T
E
P
A
T
H
_
B
A
C
K
E
N
D
)
;

	
	
	
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
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
'
,
 
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
)
;

	
	
	
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
w
i
d
g
e
t
.
h
t
m
l
'
)
;

	
	
	

	
	
	
$
c
o
n
t
e
n
t
 
=
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
n
u
l
l
,
 
t
r
u
e
)
;

	
	
}

	
	

	
	
/
/
s
e
t
 
a
j
a
x
 
r
e
s
p
o
n
s
e

	
	
$
r
e
s
p
o
n
s
e
 
=
 
a
r
r
a
y
(

	
	
	
'
w
i
d
g
e
t
'
 
=
>
 
$
j
r
_
w
i
d
g
e
t
,

	
	
	
'
e
n
a
b
l
e
d
'
 
=
>
 
$
j
r
_
w
i
d
g
e
t
_
e
n
a
b
l
e
d
,

	
	
	
'
c
o
l
u
m
n
'
 
=
>
 
$
j
r
_
w
i
d
g
e
t
_
c
o
l
u
m
n
,

	
	
	
'
p
o
s
i
t
i
o
n
'
 
=
>
 
$
j
r
_
w
i
d
g
e
t
_
p
o
s
i
t
i
o
n
,

	
	
	
'
c
o
n
t
e
n
t
'
 
=
>
 
$
c
o
n
t
e
n
t

	
	
)
;


 
 
 
 
 
 
 
 
e
c
h
o
 
j
s
o
n
_
e
n
c
o
d
e
(
$
r
e
s
p
o
n
s
e
)
;

 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
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
 
n
u
l
l
;

 
 
 
 
}

}

