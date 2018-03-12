
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


/
*
*

 
*
 
C
r
e
a
t
e
s
 
t
h
e
 
J
o
m
r
e
s
 
c
o
n
f
i
g
 
p
a
n
e
l
 
o
b
j
e
c
t
.

 
#

 
*

 
*
 
@
s
i
n
c
e
 
2
.
6

 
*
/

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
c
o
n
t
e
n
t
_
t
a
b
s
_
n
o
r
m
a
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


 
 
 
 
/
*
*

 
 
 
 
 
*
 
C
o
n
s
t
r
u
c
t
o
r
.

 
 
 
 
 
*
/

 
 
 
 
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
p
a
n
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
p
a
n
e
L
i
n
k
 
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
c
o
u
n
t
e
r
 
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
p
a
n
e
l
N
a
m
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
r
a
n
d
o
m
S
t
r
i
n
g
 
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
u
s
e
C
o
o
k
i
e
s
 
=
 
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
*
*

 
 
 
 
 
*
 
S
t
a
r
t
s
 
t
h
e
 
t
a
b
s
.

 
 
 
 
 
*
/

 
 
 
 
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
t
a
r
t
T
a
b
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
e
c
h
o
 
"
<
s
c
r
i
p
t
 
t
y
p
e
=
\
"
t
e
x
t
/
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
\
"
 
d
e
f
e
r
=
\
"
t
r
u
e
\
"
>

	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
d
o
c
u
m
e
n
t
)
.
r
e
a
d
y
(
f
u
n
c
t
i
o
n
(
)
 
{

	
	
	
/
/
j
o
m
r
e
s
J
q
u
e
r
y
(
'
#
c
o
n
t
e
n
t
_
t
a
b
s
'
)
.
t
a
b
s
(
)
;

	
	
	
j
o
m
r
e
s
J
q
u
e
r
y
(
\
"
#
c
o
n
t
e
n
t
_
t
a
b
s
\
"
)
.
t
a
b
s
(
)
;

	
	
	
}
)
;

	
	
<
/
s
c
r
i
p
t
>

	
	
"
;

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
d
i
v
 
i
d
=
"
c
o
n
t
e
n
t
_
t
a
b
s
"
 
>
 
<
!
-
-
 
s
t
a
r
t
 
t
a
b
s
 
p
a
n
e
l
 
-
-
>
'
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
S
t
a
r
t
s
 
t
h
e
 
p
a
n
e
l
.

 
 
 
 
 
*
/

 
 
 
 
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
t
a
r
t
P
a
n
e
l
(
$
t
a
b
p
a
g
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
a
n
c
h
o
r
 
=
 
p
r
e
g
_
r
e
p
l
a
c
e
(
'
/
[
^
A
-
Z
a
-
z
0
-
9
_
-
]
+
/
'
,
 
'
'
,
 
$
t
a
b
p
a
g
e
)
;

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
l
e
n
(
$
a
n
c
h
o
r
)
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
n
c
h
o
r
 
=
 
g
e
n
e
r
a
t
e
J
o
m
r
e
s
R
a
n
d
o
m
S
t
r
i
n
g
(
1
0
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
t
a
b
C
o
o
k
i
e
S
t
r
i
n
g
 
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
p
a
n
e
l
N
a
m
e
s
[
 
]
 
=
 
$
a
n
c
h
o
r
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
n
e
L
i
n
k
[
 
]
 
=
 
'
<
l
i
>
<
a
 
h
r
e
f
=
"
#
'
.
$
a
n
c
h
o
r
.
'
"
>
<
s
p
a
n
>
'
.
$
t
a
b
p
a
g
e
.
'
<
/
s
p
a
n
>
<
/
a
>
<
/
l
i
>

	
	
'
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
n
e
s
[
 
]
 
=
 
'
<
d
i
v
 
i
d
=
"
'
.
$
a
n
c
h
o
r
.
'
"
>
<
!
-
-
 
s
t
a
r
t
 
c
o
n
t
e
n
t
 
t
a
b
 
p
a
n
e
l
 
-
-
>
'
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
n
e
s
[
 
]
 
=
 
'
<
t
a
b
l
e
 
w
i
d
t
h
=
"
1
0
0
%
"
 
b
o
r
d
e
r
=
"
0
"
>
<
t
r
>
<
t
d
>
'
;
 
/
/
 
W
i
t
h
o
u
t
 
t
h
i
s
 
t
h
e
 
t
a
b
s
 
d
o
n
'
t
 
t
a
k
e
 
u
p
 
a
l
l
 
t
h
e
 
a
v
a
i
l
a
b
l
e
 
c
o
n
t
e
n
t
 
a
r
e
a
,
 
s
o
 
t
h
i
s
 
i
s
 
n
e
e
d
e
d
 
(
a
l
t
h
o
u
g
h
,
 
l
a
c
k
 
o
f
 
s
l
e
e
p
 
a
n
d
 
r
&
r
 
p
r
o
b
a
b
l
y
 
i
s
n
'
t
 
h
e
l
p
i
n
g
)
.

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
I
n
s
e
r
t
s
 
c
o
n
t
e
n
t
 
i
n
t
o
 
t
h
e
 
p
a
n
e
l
.

 
 
 
 
 
*
/

 
 
 
 
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
n
s
e
r
t
C
o
n
t
e
n
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
p
a
n
e
s
[
 
]
 
=
 
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
e
n
t
.
'

	
	
'
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
E
n
d
s
 
t
h
e
 
p
a
n
e
l
.

 
 
 
 
 
*
/

 
 
 
 
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
n
d
P
a
n
e
l
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
p
a
n
e
s
[
 
]
 
=
 
'
<
/
t
d
>
<
/
t
r
>
<
/
t
a
b
l
e
>
'
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
n
e
s
[
 
]
 
=
 
'
<
/
d
i
v
>
 
<
!
-
-
 
e
n
d
 
c
o
n
t
e
n
t
 
t
a
b
 
p
a
n
e
l
 
-
-
>
'
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
E
n
d
s
 
t
h
e
 
t
a
b
s
.

 
 
 
 
 
*
/

 
 
 
 
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
n
d
T
a
b
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
u
l
>

	
	
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
t
h
i
s
-
>
p
a
n
e
L
i
n
k
 
a
s
 
$
p
a
n
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
p
a
n
e
;

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
/
u
l
>

	
	
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
t
h
i
s
-
>
p
a
n
e
s
 
a
s
 
$
p
a
n
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
$
p
a
n
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
e
c
h
o
 
'
<
/
d
i
v
>
 
<
!
-
-
 
e
n
d
 
t
a
b
s
 
p
a
n
e
l
 
-
-
>
'
;

 
 
 
 
}


 
 
 
 
/
*
*

 
 
 
 
 
*
 
A
d
d
s
 
c
o
n
t
e
n
t
 
t
o
 
t
h
e
 
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
e
n
t
 
a
r
r
a
y
 
v
a
r
i
a
b
l
e
.

 
 
 
 
 
*
/

 
 
 
 
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
c
o
n
t
e
n
t
(
$
v
a
l
 
=
 
'
&
n
b
s
p
;
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
c
o
n
t
e
n
t
 
.
=
 
$
v
a
l
;

 
 
 
 
}

}

